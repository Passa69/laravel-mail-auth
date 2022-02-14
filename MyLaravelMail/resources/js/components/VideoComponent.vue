<template>
    <div>
        <table border="1">
            <tr>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Rating</th>
                <th v-if="user">Action</th>
            </tr>
            <tr v-for="video, i in videos" :key="i">
                <td>{{ video.title }}</td>
                <td>{{ video.subtitle }}</td>
                <td>{{ video.rating }}</td>
                <td v-if="user">
                    <a class="btn btn-danger" :href="`/api/app/delete/${video.id}`">DELETE</a>
                </td>
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
    props: {

        user:String
    },
    mounted() {

        console.log('user', this.user);

        axios.get('/api/app/list')
             .then(r => this.videos = r.data)
             .catch(e => console.log(e));
    }
}
</script>
