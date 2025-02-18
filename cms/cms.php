<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Summernote Editor</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <h3>Pages</h3>
                <select id="pageSelector" class="form-control">
                    <option value="">Select a page</option>
                    <?php
                    $directories = ['', 'omlagg', 'bg'];
                    foreach ($directories as $dir) {
                        $files = scandir($_SERVER['DOCUMENT_ROOT'] . '/' . $dir);
                        foreach ($files as $file) {
                            if (preg_match('/\.(php|html)$/', $file)) {
                                $path = ($dir ? $dir . '/' : '') . $file;
                                echo "<option value='$path'>$path</option>";
                            }
                        }
                    }
                    ?>
                </select>
                <button id="saveButton" class="btn btn-primary mt-2">Save</button>
            </div>
            <div class="col-md-9">
                <div id="summernote"></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Välj i listan till vänster, ändra hur mycket du vill, sen spara',
                tabsize: 2,
                height: 300
            });

            $('#pageSelector').change(function() {
                var page = $(this).val();
                if (page) {
                    // Use the proxy script to fetch the page content
                    $.get('proxy.php', { page: page }, function(data) {
                        $('#summernote').summernote('code', data);
                    }).fail(function() {
                        alert('Failed to load the page.');
                    });
                }
            });

            $('#saveButton').click(function() {
                var page = $('#pageSelector').val();
                var content = $('#summernote').summernote('code');
                if (page) {
                    $.post('save.php', { page: page, content: content }, function(response) {
                        alert('Page saved successfully!');
                    });
                }
            });
        });
    </script>
</body>
</html>