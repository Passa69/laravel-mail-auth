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
                    <!-- <a class="btn btn-danger" :href="`/api/app/delete/${video.id}`">DELETE</a> -->
                    <button @click="videoDelete(video.id)" class="btn btn-danger">DELETE</button>
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
    methods: {

        videoDelete(id) {

            axios.get(`/api/app/delete/${id}`)
             .then(r => {

                 const ind = this.getIndexById(id);
                 console.log(ind, this.videos);
                 this.videos.splice(ind, 1);
             })
             .catch(e => console.log('e', e));
        },

        getIndexById(id) {
            for (let x=0; x<this.videos.lenght; x++) {

                const video = this.videos[x];

                if (video.id == id) {
                    return x;
                }
            }

            return -1;
        }
    },
    mounted() {

        console.log('user', this.user);

        axios.get('/api/app/list')
             .then(r => this.videos = r.data)
             .catch(e => console.log(e));
    }
}
</script>
