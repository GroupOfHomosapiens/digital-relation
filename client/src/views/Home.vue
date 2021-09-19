<template>
  <section class="demo-wrap">
    <div class="demo-content">
      <div style="background-color:rgb(1,131,61);" class="animation d-flex flex-column float-left alig-center justify-center fillHeight">
        <div class="white--text font-weight-bold text-uppercase text-h6 text-sm-h5 text-md-h3">
          <center>Türkmen Döwlet Ykdysadyýet we Dolandyryş Instituty</center>
        </div>
      </div>
      <div class="fillHeight1 animation1 float-right d-flex flex-column align-center justify-center">
        <div style="color:rgb(1,131,61);" class="font-weight-bold text-uppercase text-h6 text-sm-h5 text-md-h3">
          <center>Sanly Gatnaşyk <br> Hasabaty</center>
        </div>
        <div>
          <div class="margin float-right">
            <div class="animetionImg">
              <v-img
                class="icon animationImg"
                @click="signIn()"
                alt="Register"
                height="100"
                width="100"
                src="../assets/yanmadyk.png"
              >
              </v-img>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
  data: () => ({
  }),
  methods: {
    signIn() {
      return this.$router.push('/login');
    }
  },
}
</script>

<style scoped>
.fillHeight {
  width: 50%;
  height: 100vh;
}
.fillHeight1 {
  width: 50%;
  height: 100vh;
  position: relative;
}
.margin {
  padding-top: 90px;
  padding-left: 100px;
  position: absolute;
}
.animation {
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
.animation1 {
  animation:centerme1 3s;
   -webkit-animation:centerme1 3s;
   position:absolute;
   z-index:1000;
   animation-fill-mode:forwards;
   -webkit-animation-fill-mode:forwards;
}

@keyframes centerme1  {
   0% {
      right:-50%;
   }
   
   100% {
      right:0%;
   }
}
.icon {
  cursor: pointer;
}
@keyframes animationImg {
  0% {
    border: 0px solid rgb(1,131,61, 0.74) 
  }
  50% {
    border: 10px solid rgb(1,131,61, 0.74)
  }
  100% {
    border: 0px solid rgb(1,131,61, 0.74)
  }
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
