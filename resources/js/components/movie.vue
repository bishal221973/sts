<template>
 <div class="col-12 d-flex justify-content-center">
                <div class="col-lg-6">
                    <input type="text" id="movieSearch"  v-model="search_text" class="col-12 form-control mb-3 searchInput" placeholder="Search for movies">
                </div>
            </div>

            <div class="row">

                    <div class="mx-2 zoom mb-3" v-for="item in movieList" v-bind:key="item.id">
                        <!-- {{ item }} -->
                        <div class="movieThumbnail"
                        :style="{ backgroundImage: 'url(' + assetUrl + '/' + item.thumbnail + ')' }">

                        </div>
                        <div class="movieDetail col-12">
                            <h3 class="m-0 p-0 col-12 text-center text-white font-weight-bold">{{ item.movie_name }}
                            </h3>
                            <label
                                class="col-12 text-center text-white font-weight-normal">({{ item.movie_name }})</label>

                            <div class="col-12 mb-3 d-flex justify-content-center">
                                <a href="{{ route('movieDetail', item.id) }}" class="col-12 text-center">Book Now</a>
                            </div>
                        </div>

                    </div>



                <div class="col-12 d-flex justify-content-center">
                    <!-- <div class="d-block">
                       <label class="col-12 text-center"> Displaying 1-10 on page {{$movieLists->currentPage()}}/{{$movieLists->lastPage()}}</label>
                        <div class="table-container" style="--data-limit: 9">

                            <div class="pagination-container">
                                <div class="d-flex row flex-fill align-items-end justify-content-center">
                                    <span class="pagination-info"></span>
                                    <a href="{{$movieLists->url(1)}}" class="btn">
                                        <i class="fas fa-angle-double-left"></i>
                                    </a>
                                    <a href="{{$movieLists->previousPageUrl()}}" class="btn">
                                        <i class="fas fa-angle-left"></i>
                                    </a>
                                    <div style="position: relative;top: -8px" class="px-5">
                                        {{-- <div class="pagination-wrapper"> --}}
                                            {{$movieLists->currentPage()}}
                                        {{-- </div> --}}
                                    </div>
                                    <a href="{{$movieLists->nextPageUrl()}}" class="btn">
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                    <a href="{{$movieLists->url($movieLists->lastPage())}}" class="btn">
                                        <i class="fas fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="progress-bar">
                                <div class="progress-point"></div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
</template>
<script>
    export default{
        name: "movie",
        data(){
            return{
                'movieList':'',
                'assetUrl':'storage',
                'search_text':'',
            }
        },
        methods:{
            getUnits: function (){
                var url=window.location.origin;
                return axios.get(url + '/api/getMovie',
                {
                    headers: {
                        'Content-type': 'application/json',
                    }
                }).then((response) => {
                    console.log(response.data.data);
                    this.movieList=response.data.data;
                }).catch(error => {
                    if (error.response.status === 401) {
                        this.$router.push({ name: "login" });

                    } else {
                        Swal.fire(
                            'Warning',
                            'error: ' + error,
                            'error'
                        )
                    }
                });
            }
        },
        beforeMount() {
        this.getUnits()
    },
    watch: {
        search_text: function (val, oldVal) {

            var url=window.location.origin;
                return axios.get(url + '/api/search',
                {
                    headers: {
                        'Content-type': 'application/json',
                    }
                }).then((response) => {
                    console.log(response.data);
                    // this.movieList=response.data.data;
                }).catch(error => {
                    if (error.response.status === 401) {
                        this.$router.push({ name: "login" });

                    } else {
                        Swal.fire(
                            'Warning',
                            'error: ' + error,
                            'error'
                        )
                    }
                });
        }
    },
    }
</script>
