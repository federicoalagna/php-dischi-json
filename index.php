<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista di Dischi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
<div id="app" class="container">
    <h1 class="my-4">Lista di Dischi</h1>
    <ul class="list-group">
        <li class="list-group-item" v-for="disco in dischi" :key="disco.id">
            <strong>{{ disco.title }}</strong> - {{ disco.artist }}
        </li>
    </ul>
</div>
