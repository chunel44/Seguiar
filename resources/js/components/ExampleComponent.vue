<template>
    <div class="container-fluid">
        <div class="headline-2"><div class="head-texto2">
            NOTICIAS
        </div>
        </div>
    <div class="card marg-card" v-for="item in list">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 foto text-center">
                    <img class="img-not" v-bind:src="'post/'+item.file">
                </div>
                <div class="col-md-6 texto">
                    <div class="headline">
                        <div class="head-texto" v-text="item.name">

                        </div>
                    </div>
                    <div class="noticia-texto" v-text="item.excerpt">

                    </div>
                    <a v-bind:href="/noticia/+item.slug" class="btn btn-mas">MÁS <i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <infinite-loading @distance="1" @infinite="infiniteHandler">
        <div slot="no-more"></div>
        <div slot="spinner">Cargando...</div>
        <div slot="no-results">Sin resultados</div>
    </infinite-loading>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                list: [],
                page: 0
            }
        },
        methods: {
            infiniteHandler($state) {
                this.page++
                let url = 'http://localhost:3000/api/posts?page='+this.page
                axios.get(url)
                    .then(response => {
                        let posts = response.data.data
                        if(posts.length){
                            this.list = this.list.concat(posts)
                            $state.loaded()
                        }else{
                            $state.complete()
                        }
                    })
            }
        }
    }
</script>
