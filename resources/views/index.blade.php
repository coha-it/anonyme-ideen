<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ url('dist/app.css') }}">
  <title>Anonyme Ideen</title>
</head>
<body>
    <div id="app">
        <div class="paper container">
            <h1>Some Fresh Title</h1>
            <div class="form-group">
                <div class="row flex-edges">
                    <div class="sm-12 md-6 lg-6">
                        <div class="form-group">
                        <label>Deine anonyme Idee</label>
                        <textarea style="width: 562px; height: 105px;" placeholder="Irgend ein Satz, Text, Spruch oder sontwas"></textarea>
                        </div>
                    </div>
                    <div class="sm-12 md-5 lg-5">
                            <legend>Kategorie(n)</legend>
                            <label for="paperChecks1" class="paper-check">
                                <input type="checkbox" name="paperChecks" id="paperChecks1" value="option 1"> <span>This is the first check</span>
                            </label>
                            <label for="paperChecks2" class="paper-check">
                                <input type="checkbox" name="paperChecks" id="paperChecks2" value="option 2"> <span>This is the second check</span>
                            </label>
                    </div>
                    <div class="sm-12 md-12 lg-12">
                        <button>Absenden!</button>
                    </div>
                </div>
            </div>

            {( message )}

            <table class="table-hover">
                <thead>
                <tr>
                    <th>Kategorien</th>
                    <th>Text</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Kategorie</td>
                    <td>Bob Dylan</td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>

  <script src="{{ url('dist/app.js') }}"></script>
</body>
</html>
