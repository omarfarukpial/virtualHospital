<?php

// Load the dataset from a CSV file
$csv = array_map('str_getcsv', file('dataset.csv'));
$headers = array_shift($csv);
$data = array();
foreach ($csv as $row) {
    $data[] = array_combine($headers, $row);
}

// Split the data into a training set and a test set
$trainingData = array_slice($data, 0, count($data) * 0.8);
$testData = array_slice($data, count($data) * 0.8);

// Create a new decision tree classifier
$classifier = new DecisionTreeClassifier();

// Train the classifier using the training data
$classifier->train($trainingData, 'disease', array('symptom1', 'symptom2', 'symptom3'));

// Test the classifier using the test data
$predictions = $classifier->predict($testData);

// Calculate the accuracy of the predictions
$accuracy = 0;
foreach ($predictions as $i => $prediction) {
    if ($prediction == $testData[$i]['disease']) {
        $accuracy++;
    }
}
$accuracy /= count($predictions);

// Print the accuracy
echo "Accuracy: " . $accuracy;
