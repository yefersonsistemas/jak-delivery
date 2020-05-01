<template>
    <div>
        <div id="Offert-post" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item" :class="{active : item.active}" v-for="item in items">
                <img class="d-block w-100" :src=item.imageDirection>
                    <div class="carousel-caption d-none d-md-block" :class="{'caption-right': item.DetailsRight , 'caption-left': item.DetailsLeft , 'caption-center': item.DetailsCenter}">
                        <h5>{{item.name}}</h5>
                        <p>{{item.description}}</p>
                        <button class="btn btn-success">boton</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#Offert-post" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#Offert-post" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items:  [
                {
                    imageDirection: 'https://tomatesenmijardin.files.wordpress.com/2017/04/pepito-2.png?w=500',
                    name: 'perrito',
                    description: 'perrito hecha en casa papa',
                    active: true,
                    DetailsRight : true,
                    DetailsLeft : false,
                    DetailsCenter: false
                },
                {
                    imageDirection: 'https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2018/08/hamburguesas-caseras-receta-facil.jpg',
                    name: 'hamborguesa',
                    description: 'hamburgueza hecha en casa papa',
                    active: false,
                    DetailsRight : false,
                    DetailsLeft : true,
                    DetailsCenter: false
                },
                {
                    imageDirection: 'https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2018/05/hamburguesa-con-fondue-receta.jpg',
                    name: 'hamborguesa',
                    description: 'hamburgueza hecha en casa papa mejor que la otra',
                    active: false,
                    DetailsRight : false,
                    DetailsLeft : false,
                    DetailsCenter: true
                }
                ]
            
            
        }
    },
}
</script>