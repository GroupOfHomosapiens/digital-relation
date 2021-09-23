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
				contain
			>
				<template v-slot:placeholder>
					<v-row class="fill-height ma-0" align="center" justify="center">
						<v-progress-circular
							indeterminate
							color="grey lighten-5"
						></v-progress-circular>
					</v-row>
				</template>
			</v-img>
			<div class="titleText pt-10 text-subtitle-1">
				Türkmen Döwlet <br />
				Ykdysadyýet we <br />
				Dolandyryş Instituty
			</div>
		</div>
		<div
			class="d-flex flex-column align-center justify-center mt-10 positionRelative"
		>
			<v-card height="450" width="1000" elevation="3" tile>
				<div
					style="background-color: rgb(1,131,61); width: 150px;"
					class="float-right fill-height pt-6"
				>
					<div class="ml-6">
						<center>
							<v-img alt="Bilim" height="80" width="80" src="../assets/1.png">
							</v-img>
						</center>
						<center>
							<v-img alt="Bilim" height="80" width="80" src="../assets/2.png">
							</v-img>
						</center>
						<center>
							<v-img alt="Bilim" height="80" width="80" src="../assets/3.png">
							</v-img>
						</center>
						<center>
							<v-img alt="Bilim" height="80" width="80" src="../assets/4.png">
							</v-img>
						</center>
						<center>
							<v-img alt="Bilim" height="80" width="80" src="../assets/5.png">
							</v-img>
						</center>
					</div>
				</div>
				<div
					class="d-flex flex-column align-center justify-center mt-6 ml-12 positionAbsolute"
				>
					<v-card
						height="400"
						width="830"
						elevation="3"
						class="d-flex flex-column align-center"
					>
						<div class="titleText text-h5 pt-5">Ulgama gir</div>
						<v-card-text>
							<v-form
								class="pt-5 pa-8"
								v-model="valid"
								lazy-validation
								ref="form"
							>
								<v-row>
									<v-col cols="6">
										<v-select
											v-model="user.faculty"
											:items="faculties"
											:rules="requiredField"
											label="Fakultedi saýlamak"
											required
											outlined
											item-color="green"
											color="rgb(1,131,61)"
										>
										</v-select>
										<v-select
											v-model="responsibility"
											:items="responsibilities"
											:rules="requiredField"
											label="Wezipe saýlamak"
											required
											outlined
											item-color="green"
											color="rgb(1,131,61)"
										>
										</v-select>
									</v-col>
									<v-col cols="6">
										<v-text-field
											type="username"
											label="Adyňyz"
											v-model="user.name"
											prepend-inner-icon="mdi-account-circle"
											:rules="requiredField"
											clearable
											outlined
											required
											color="rgb(1,131,61)"
										>
										</v-text-field>
										<v-text-field
											:type="showPassword ? 'text' : 'password'"
											label="Parol"
											v-model="user.password"
											prepend-inner-icon="mdi-lock"
											:append-icon="showPassword ? 'mdi-eye' : 'mdi-eye-off'"
											@click:append="showPassword = !showPassword"
											:rules="requiredField"
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
											:rules="requiredField"
											label="Ýatda sakla"
											required
											color="rgb(1,131,61)"
										/>
										<v-spacer />
										<center>
											<v-btn
												:disabled="!valid"
												color="rgb(1,131,61)"
												class="mr-4"
												@click="validate"
												:dark="valid"
											>
												Girmek
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
	data() {
		return {
			user: {
				responsibility: '',
				faculty: '',
				name: '',
				password: '',
			},
			valid: true,
			showPassword: false,
			responsibility: null,
			responsibilities: ['Dekan', 'Dekanyň orunbasary'],
			faculty: null,
			faculties: ['Ykdysadyýet', 'Maliýe', 'Menejment', 'Marketing'],
			checkbox: false,
			requiredField: [v => !!v || 'Bu meýdan hökmany!'],
		};
	},
	methods: {
		validate() {
			if (this.$refs.form.validate()) {
				this.login();
			}
		},
		login() {
			this.$axios.get('/sanctum/csrf-cookie').then(() => {
				this.$axios
					.post('/auth/register')
					.then(res => {
						console.log(res);
						// this.$cookies.set('token', res.data.token);
					})
					.catch(err => {
						console.log(err);
					});
			});
		},
	},
};
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
	letter-spacing: -0.015625em;
	line-height: 1.5rem;
	color: rgb(1, 131, 61);
}
</style>
