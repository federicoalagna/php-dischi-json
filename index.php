<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista di Dischi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div id="app" class="container">
    <h1 class="my-4 text-center ">Boolify</h1>
    <div class="row">
        <div class="col-md-4" v-for="disco in dischi" :key="disco.id">
            <div class="card mb-4">
                <img :src="disco.cover" class="card-img-top" :alt="disco.title">
                <div class="card-body">
                    <h5 class="card-title">{{ disco.title }}</h5>
                    <p class="card-text">{{ disco.artist }}</p>
                </div>
            </div>
        </div>
    </div>
</div>


    <script>
    new Vue({
        el: '#app',
        data: {
            dischi: []
        },
        created() {
            axios.get('api.php')
                .then(response => {
                    this.dischi = response.data;
                })
                .catch(error => {
                    console.error("Ci sono stati dei problemi nel recupero dei dati:", error);
                });
        }
    });
</script>


</body>
</html>

