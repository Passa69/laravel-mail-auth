<template>
    <div>
        <table border="1">
            <tr>
                <th>title</th>
                <th>subtitle</th>
                <th>rating</th>
            </tr>
            <tr v-for="video, i in videos" :key="i">
                <td>{{ video.title }}</td>
                <td>{{ video.subtitle }}</td>
                <td>{{ video.rating }}</td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    data: function() {

        return {
            videos: []
        };
    },
    mounted() {

        axios.get('/api/app/list')
             .then(r => this.videos = r.data)
             .catch(e => console.log(e));
    }
}
</script>
