<?php

namespace App\Http\Controllers;

use \TensorFlow\Python\NumPy\NumPyProxy;
use \TensorFlow\Python\PythonInterface;
use \TensorFlow\Python\TensorFlow;

class AIController extends Controller
{
    public function predict()
    {
        // Load Keras model
        $modelPath = "/home/rupesh/Downloads/laravel-9-multi-auth-system-main/model4.h5";
        $python = new PythonInterface();
        $numpy = new NumPyProxy($python);
        $tf = new TensorFlow($python);
        $keras = $tf->keras;
        $model = $keras->models->load_model($modelPath);

        // Prepare input data
        $inputData = [[1.2, 3.4, 5.6, 7.8]]; // Replace with your own input data

        // Convert input data to a NumPy array
        $inputData = $numpy->array($inputData);

        // Make prediction
        $prediction = $model->predict($inputData);

        // Return prediction
        return $prediction;
    }
}
