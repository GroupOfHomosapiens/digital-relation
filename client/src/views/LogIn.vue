<template>
  <section>
    <div>
      <v-img
        alt="TDYDI"
        class="ml-2 float-left"
        height="140"
        width="140"
        src="../assets/tdydi.png"
        aspect-ratio="1"
        transition="scale-transition"
      >
        <template v-slot:placeholder>
          <v-row
            class="fill-height ma-0"
            align="center"
            justify="center"
          >
            <v-progress-circular
              indeterminate
              color="grey lighten-5"
            ></v-progress-circular>
          </v-row>
        </template>
      </v-img>
      <div class="titleText pt-10 text-subtitle-1">Türkmen Döwlet <br> Ykdysadyýet we <br> Dolandyryş Instituty</div>
    </div>
    <div class="d-flex flex-column align-center justify-center mt-10 positionRelative">
      <v-card
        height="450"
        width="1000"
        elevation="3"
        tile
      >
        <div style="background-color: rgb(1,131,61); width: 150px;" class="float-right fill-height pt-6">
          <div class="ml-6">
            <center>
              <v-img
                alt="Bilim"
                height="80"
                width="80"
                src="../assets/1.png"
              >
              </v-img>
            </center>
            <center>
              <v-img
                alt="Bilim"
                height="80"
                width="80"
                src="../assets/2.png"
              >
              </v-img>
            </center>
            <center>
              <v-img
                alt="Bilim"
                height="80"
                width="80"
                src="../assets/3.png"
              >
              </v-img>
            </center>
            <center>
              <v-img
                alt="Bilim"
                height="80"
                width="80"
                src="../assets/4.png"
              >
              </v-img>
            </center>
            <center>
              <v-img
                alt="Bilim"
                height="80"
                width="80"
                src="../assets/5.png"
              >
              </v-img>
            </center>
          </div>
        </div>
        <div class="d-flex flex-column align-center justify-center mt-6 ml-12 positionAbsolute">
          <v-card
            height="400"
            width="830"
            elevation="3"
            class="d-flex flex-column align-center"
          >
            <div class="titleText text-h5 pt-5">Ulgama gir</div>
            <v-card-text>
              <v-form class="pt-5 pa-8" v-model="valid" ref="form" method="post" lazy-validation>
                <v-row>
                  <v-col
                    cols="6"
                  >
                    <v-select
                      v-model="select1"
                      :items="items1"
                      :rules="[v => !!v || 'Bu meýdan hökmany!']"
                      label="Fakultedi saýlamak"
                      required
                      outlined
                      item-color="green"
                      color="rgb(1,131,61)"
                    >
                    </v-select>
                    <v-select
                      v-model="select"
                      :items="items"
                      :rules="[v => !!v || 'Bu meýdan hökmany!']"
                      label="Wezipe saýlamak"
                      required
                      outlined
                      item-color="green"
                      color="rgb(1,131,61)"
                    >
                    </v-select>
                  </v-col>
                  <v-col
                    cols="6"
                  >
                    <v-text-field 
                      type="username" 
                      label="Adyňyz" 
                      v-model="username" 
                      prepend-inner-icon="mdi-account-circle" 
                      :rules="[v => !!v || 'Bu meýdan hökmany!']" 
                      clearable 
                      outlined
                      required 
                      color="rgb(1,131,61)"
                    >
                    </v-text-field>
                    <v-text-field 
                      :type="showPassword ? 'text' : 'password'" 
                      label="Parol" 
                      v-model="password" 
                      prepend-inner-icon="mdi-lock" 
                      :append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'" 
                      @click:append="showPassword = !showPassword " 
                      :rules="[v => !!v || 'Bu meýdan hökmany!']" 
                      clearable 
                      outlined
                      required
                      color="rgb(1,131,61)"
                    >
                    </v-text-field>
                  </v-col>
                  <v-col>
                    <v-checkbox
                      v-model="checkbox"
                      :rules="[v => !!v || 'Bu meýdan hökmany!']"
                      label="Ýatda sakla"
                      required
                      color="rgb(1,131,61)"
                    ></v-checkbox>
                    <v-spacer></v-spacer>
                    <center>
                      <v-btn
                        :disabled="!valid"
                        color="rgb(1,131,61)"
                        class="mr-4"
                        @click="validate"
                      >
                        <span style="color:white;">Girmek</span>
                      </v-btn>
                    </center>
                  </v-col>
                </v-row>
              </v-form>
            </v-card-text>
          </v-card>
        </div>
      </v-card>
    </div>
  </section>
</template>

<script>
  export default {
    name: 'Login',
    data: () => ({
      valid: true,
      username: '',
      password: '',
      showPassword: false,
      select: null,
      items: [ 'Dekan', 'Dekanyň orunbasary' ],
      select1: null,
      items1: [ 'Ykdysadyýet', 'Maliýe', 'Menejment', 'Marketing' ],
      checkbox: false,
    }),
    methods: {
      validate(e) {
        if(this.username === '' || this.password === '' || this.select === null || this.select1 === null || this.checkbox === false) {
          e.preventDefault();
          this.$refs.form.validate()
        } else {
          this.$router.push('/menu')
        }
      },
    },
  }
</script>

<style scoped>
.positionRelative {
  position: relative;
}
.positionAbsolute {
  position: absolute;
}
.titleText {
  font-weight: 600;
  letter-spacing: -.015625em;
  line-height: 1.5rem;
  color: rgb(1,131,61);
}
</style>
