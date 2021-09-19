<template>
  <section class="demo-wrap">
    <div class="demo-content">
      <div id="changeWidth" style="background-color:rgb(1,131,61); padding-bottom:120px" class="d-flex flex-column float-left alig-center justify-center fillHeight">
        <div class="margin1">
          <center>
            <v-img
              alt="Bilim"
              height="120"
              width="120"
              src="../assets/bilim.png"
            >
            </v-img>
          </center>
        </div>
        <div class="white--text font-weight-bold text-uppercase text-h6 text-sm-h5 text-md-h3">
          <center>Sanly Gatnaşyk <br> Hasabaty</center>
        </div>
      </div>
      <div>
        <div class="float-right">
          <div>
           <v-btn @click="showNav" elevation="2" tile height="60" width="160" color="rgb(1,131,61)" class="mt-16 font-weight-bold text-uppercase text-h5 ">
              <v-icon
                large
                color="white"
                left
              >
                mdi-menu  
              </v-icon>
              <center class="textWhite ml-5">Menu</center>
            </v-btn>
          </div>
        </div>
        <div>
          <v-navigation-drawer
            v-model="drawer"
            absolute
            temporary
            hide-overlay
            right
            color="rgb(1,131,61)"
            width="350"
          >
            <v-list
              nav
              class="pt-50"
            >
              <v-list-item-group
                v-model="group"
                active-class="green--text text--accent-4"
              >
                <v-list-item>
                  <v-list-item-title>
                    <div class="white--text float-right font-weight-bold text-uppercase text-h5">Menu</div>
                  </v-list-item-title>
                </v-list-item>
                <v-divider></v-divider>
                <v-list-item v-for="list in lists" :key="list.id" link :to="list.routes">
                  <v-list-item-title class="hover white--text font-weight-bold text-h6 text-uppercase">{{ list.text }}</v-list-item-title>
                </v-list-item>
              </v-list-item-group>
            </v-list>
          </v-navigation-drawer>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
  data: () => ({
    drawer: false,
    group: null,
    lists: [
			{ id:1, text:'Gatnaşyk nyzam', routes:'./gatnashyk-nyzam' },
			{ id:2, text:'Sapaklaryň hasabaty', routes:'./sapaklaryň-hasabaty' },
			{ id:3, text:'Aýlyk jemi', routes:'./aýlyk-jemi' },
      { id:4, text:'Umumy ýaşaýyş jaýy', routes:'./umumy-ýaşaýyş-jaýy' },
      { id:5, text:'Şertnama', routes:'./şertnama' },
    ],
  }),
  watch: {
      group () {
        this.drawer = false
      },
    },
  methods: {
    showNav() {
      let chWidth = document.getElementById('changeWidth')
      this.drawer = !this.drawer
      if(this.drawer) {
        chWidth.style.width = '800px'
      }
    }
  },
}
</script>

<style scoped>
.textWhite {
  color: #fff
}
.fillHeight {
  width: 50%;
  height: 100vh;
}
.margin1 {
  margin-bottom: 40px;
}
.hover {
  transition: transform 250ms;
}
.hover:hover {
  transform: translateX(15px);
 
}
.animation2 {
  animation:centerme 3s;
   -webkit-animation:centerme 3s;
   position:absolute;
   z-index:1000;
   animation-fill-mode:forwards;
   -webkit-animation-fill-mode:forwards;
}

@keyframes centerme  {
   0% {
      left:-50%;
   }
   
   100% {
      left:0%;
   }
}
.icon {
  cursor: pointer;
}
/* .demo-wrap {
  position: relative;
}

.demo-wrap:before {
  content: ' ';
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background-image: url('../assets/3.png');
  background-repeat: repeat;
  background-position: 100% 0;
}

.demo-content {
  position: relative;
  background-color: green;
  opacity: 0.6;
} */
</style>
