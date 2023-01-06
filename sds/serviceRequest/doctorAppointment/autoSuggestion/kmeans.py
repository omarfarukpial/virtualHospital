import pandas as pd
from sklearn.pipeline import Pipeline
from sklearn.compose import ColumnTransformer
from sklearn.preprocessing import StandardScaler, OneHotEncoder
from sklearn.cluster import KMeans


# Load the data
df = pd.read_csv(r'C:\xampp\htdocs\virtualHospital\sds\serviceRequest\doctorAppointment\autoSuggestion\doctors.csv')

# Select the features for clustering
X = df[['specialization', 'location', 'gender']]

# Define the preprocessing steps
preprocessor = ColumnTransformer(
    transformers=[
        ('cat', OneHotEncoder(), ['specialization', 'location', 'gender'])
    ]
)

# Define the clustering model
clusterer = KMeans(n_clusters=5)

# Create the pipeline
pipeline = Pipeline([('preprocessor', preprocessor), ('clusterer', clusterer)])

# Fit the model to the data
pipeline.fit(X)

# Predict the cluster for a new patient
patient_df = pd.read_csv(r'C:\xampp\htdocs\virtualHospital\sds\serviceRequest\doctorAppointment\autoSuggestion\patient.csv')

# Select the patient's features
patient = patient_df[['specialization', 'location', 'gender']].iloc[0]


# Predict the cluster
prediction = pipeline.predict(pd.DataFrame([patient]))

# Find all doctors in the nearest cluster
closest_doctors = df[pipeline.named_steps['clusterer'].labels_ == prediction]

# Sort the doctors by specialization and location
# closest_doctors = closest_doctors.sort_values(['specialization'])
closest_doctors = closest_doctors[closest_doctors['specialization'] == patient['specialization']]

# Suggest all the doctors in the nearest cluster
# print('We suggest the following doctors:')

# Find the other doctors in the cluster
other_doctors = df[pipeline.named_steps['clusterer'].labels_ == prediction].drop(closest_doctors.index)


# for i, row in closest_doctors.iterrows():
#     print(f'{row["id"]}')

# Concatenate the two dataframes
ranked_doctors = pd.concat([closest_doctors, other_doctors])


with open('result.csv', 'w') as fpres:

    
    # Write the doctors to the CSV file
    for i, row in ranked_doctors.iterrows():
        fpres.write(f'{row["id"]}\n')