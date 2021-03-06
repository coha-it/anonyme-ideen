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
            <h1>Anonyme Ideen</h1>
            <form class="form-group" @submit.prevent="submitForm">
                <div class="row flex-edges">
                    <div class="col-12 xs-12 sm-12 md-6 lg-6 xl-6">
                        <div class="form-group">
                        <label>Deine anonyme Idee</label>
                        <textarea v-model="form.idea" name="idea" style="width: 100%; height: 105px;" placeholder="Irgend ein Satz, Text, Spruch oder sonstwas"></textarea>
                        </div>
                    </div>
                    <div class="col-12 xs-12  sm-12 md-5 lg-5 xl-5">
                            <legend>Kategorie(n)</legend>
                            <template v-for="category in categories">
                                <label :for="form.categories[category.id]" class="paper-check">
                                    <input v-model="form.categories[category.id]" type="checkbox" :id="form.categories[category.id]" value="1"> <span>{( category.name )}</span>
                                </label>
                            </template>
                    </div>
                    <div class="col-12 xs-12 sm-12 md-12 lg-12 xl-12">
                        <button>Absenden!</button>
                    </div>
                </div>
            </form>

            <table class="table-hover ideen-tabelle">
                <thead>
                <tr>
                    <th>Text</th>
                    <th>Kategorien</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="idea in ideas">
                    <td>{( idea.text )}</td>
                    <td>
                        <span v-for="(category, i) in idea.categories"
                            ><template v-if="i > 0"
                                >,&nbsp;</template>{( category.name )}</span>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>
    </div>

  <script src="{{ url('dist/app.js') }}"></script>
</body>
</html>
