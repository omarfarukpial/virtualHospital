import pandas as pd
from sklearn.pipeline import Pipeline
from sklearn.compose import ColumnTransformer
from sklearn.preprocessing import StandardScaler, OneHotEncoder
from sklearn.cluster import KMeans


# Load the data
df = pd.read_csv(r'C:\xampp\htdocs\virtualHospital\sds\serviceRequest\doctorAppointment\autoSuggestion\doctors.csv')

# Select the features for clustering
X = df[['specialization', 'location']]







# Define the preprocessing steps
preprocessor = ColumnTransformer(
    transformers=[
        ('cat', OneHotEncoder(), ['specialization', 'location'])
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
patient = patient_df[['specialization', 'location']].iloc[0]


# Predict the cluster
prediction = pipeline.predict(pd.DataFrame([patient]))

# Find all doctors in the nearest cluster
closest_doctors = df[pipeline.named_steps['clusterer'].labels_ == prediction]

# closest_doctors = closest_doctors[closest_doctors['specialization'] == patient['specialization']]

# other_doctors = df[pipeline.named_steps['clusterer'].labels_ == prediction].drop(closest_doctors.index)

# ranked_doctors = pd.concat([closest_doctors, other_doctors])
exact_matches = closest_doctors[(closest_doctors['specialization'] == patient['specialization']) & (closest_doctors['location'] == patient['location'])]
if exact_matches.empty:
    closest_doctors = closest_doctors.sort_values(['specialization', 'location'])
    ranked_doctors = closest_doctors
else:
    ranked_doctors = exact_matches.append(closest_doctors.drop(exact_matches.index), ignore_index=True)



with open('result.csv', 'w') as fpres:

    
    # Write the doctors to the CSV file
    for i, row in ranked_doctors.iterrows():
        fpres.write(f'{row["id"]}\n')