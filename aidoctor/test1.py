# %%
import pandas as pd
from sklearn.ensemble import RandomForestClassifier
import ast


df = pd.read_csv(r'C:\xampp\htdocs\virtualHospital\aidoctor\datasets.csv')


X = df.drop("Disease", axis=1)
y = df["Disease"]


model = RandomForestClassifier()
model.fit(X, y)

with open('sfile.txt', 'r') as f:
    data = f.read()
    new_symptoms = [list(row) for row in ast.literal_eval(data)]


prediction = model.predict(new_symptoms)
print("", prediction[0])



