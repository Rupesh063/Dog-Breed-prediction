<x-app-layout>
    <x-slot name="header">
        <div class="header-container">
            <h2 class="header-title">
                {{ __('Welcome') }} {{ Auth::user()->name }}
            </h2>
            <a href="../blog/post" class="header-link">Blog</a>
        </div>
    </x-slot>
    <style>
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #e0aa62;
        }

        .header-title {
            font-size: 1.5rem;
            margin: 0;
        }

        .header-link {
            font-size: 1.2rem;
            color: #333;
            text-decoration: none;
        }

        .header-link:hover {
            color: #555;
        }

        .half {
            width: 50%;
            margin: 3% auto;
            background-color: #fff;
            padding: 2rem;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .dropzone-wrapper {
            border: 2px dashed #ccc;
            padding: 1.5rem;
            text-align: center;
            margin-bottom: 1.5rem;
            cursor: pointer;
        }

        .dropzone-wrapper:hover {
            border-color: #aaa;
        }

        .dropzone-desc {
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .preview-zone {
            margin-top: 1rem;
            display: flex;
            flex-wrap: wrap;
        }

        .box {
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
            position: relative;
            width: 150px;
            height: 150px;
            margin-right: 10px;
            margin-bottom: 10px;
            overflow: hidden;
        }

        .box .box-body {
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .remove-preview {
            display: none;
        }

        .upload-button,
        .clear-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        .upload-button:hover,
        .clear-button:hover {
            background-color: #2E8B57;
        }

        .clear-button {
            background-color: #f44336;
        }

        .clear-button:hover {
            background-color: #B22222;
        }
    </style>

    <div class="half">
        <section class="section2">
            <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="preview-zone hidden">
                                    <div class="box box-solid">
                                        <div class="box-body"></div>
                                    </div>
                                </div>
                                <div class="dropzone-wrapper">
                                    <div class="dropzone-desc">
                                        <i class="glyphicon glyphicon-download-alt"></i>
                                        <p>Choose an image file or drag it here.</p>
                                    </div>
                                    <input type="file" name="filePath" class="dropzone">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="upload-button">Upload</button>
                            <button type="button" class="clear-button" onclick="clearFile()">Clear</button>

                        </div>
                    </div>
                </div>
            </form>

            <script>
                // Wrap in an IIFE to avoid global namespace pollution
                (function() {
                    var clearFileBtn = document.getElementById('clear-file-btn');
                    var fileInput = document.querySelector('input[type=file]');
                    var previewZone = document.querySelector('.preview-zone');

                    clearFileBtn.addEventListener('click', function() {
                        fileInput.value = '';
                        previewZone.classList.add('hidden');
                    });
                })();
            </script>

        </section>
    </div>
</x-app-layout>