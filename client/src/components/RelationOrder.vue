<template>
	<div>
		<div
			style="background-color: rgb(1,131,61); width: 300px; height: 100vh;"
			class="float-left d-flex flex-column align-center medisaScreen"
		>
			<div class="mt-15">
				<v-text-field
					outlined
					color="white"
					label="Topar gözle"
					clearable
					dark
					filled
					dense
					prepend-inner-icon="mdi-magnify"
				/>
			</div>
			<div
				style="padding-right: 200px;"
				class="white--text text-uppercase text-subtitle-2"
			>
				<span>Kurslar</span>
			</div>
			<div class="mt-5">
				<v-btn
					tile
					@click="showTeam"
					style="border-left: 5px solid white"
					width="300"
					height="50"
					color="rgb(3,148,71)"
					block
					depressed
				>
					<span class="white--text text-uppercase font-weight-bold text-body-1"
						>5 Kurslar</span
					>
					<v-spacer></v-spacer>
					<v-icon color="white">
						{{ chevronDownUp ? 'mdi-chevron-down' : 'mdi-chevron-up' }}
					</v-icon>
				</v-btn>
				<div style="margin-top:10px" v-if="showedTeam">
					<div>
						<v-btn
							v-for="(course, i) in courses"
							:key="i"
							tile
							@click="showStudents(i)"
							style="border-left: 10px double white; margin-bottom: 10px;"
							width="300"
							height="45"
							color="rgb(8,183,92)"
							block
							depressed
						>
							<span
								class="white--text text-uppercase font-weight-bold text-body-1"
								>{{ course.team }}</span
							>
							<v-spacer />
							<v-icon color="white">
								{{
									course.chevronRightLeft
										? 'mdi-chevron-right'
										: 'mdi-chevron-left'
								}}
							</v-icon>
						</v-btn>
					</div>
				</div>
			</div>
			<div class="mt-3">
				<v-btn
					tile
					@click="showTeam1"
					style="border-left: 5px solid white"
					width="300"
					height="50"
					color="rgb(3,148,71)"
					block
					depressed
				>
					<span class="white--text text-uppercase font-weight-bold text-body-1"
						>4 Kurslar</span
					>
					<v-spacer></v-spacer>
					<v-icon color="white">
						{{ chevronDownUp1 ? 'mdi-chevron-down' : 'mdi-chevron-up' }}
					</v-icon>
				</v-btn>
				<div style="margin-top:10px" v-if="showedTeam1">
					<div>
						<v-btn
							v-for="course in courses"
							:key="course.iD"
							tile
							@click="showStudents1"
							style="border-left: 10px double white; margin-bottom: 10px;"
							width="300"
							height="50"
							color="rgb(8,183,92)"
							block
							depressed
						>
							<span
								class="white--text text-uppercase font-weight-bold text-body-1"
								>{{ course.team }}</span
							>
							<v-spacer></v-spacer>
							<v-icon color="white">
								{{
									course.chevronRightLeft
										? 'mdi-chevron-right'
										: 'mdi-chevron-left'
								}}
							</v-icon>
						</v-btn>
					</div>
				</div>
			</div>
			<div class="mt-3">
				<v-btn
					tile
					@click="showTeam2"
					style="border-left: 5px solid white"
					width="300"
					height="50"
					color="rgb(3,148,71)"
					block
					depressed
				>
					<span class="white--text text-uppercase font-weight-bold text-body-1"
						>3 Kurslar</span
					>
					<v-spacer></v-spacer>
					<v-icon color="white">
						{{ chevronDownUp2 ? 'mdi-chevron-down' : 'mdi-chevron-up' }}
					</v-icon>
				</v-btn>
				<div
					class="d-flex flex-column"
					style="margin-top:10px;"
					v-if="showedTeam2"
				>
					<div>
						<v-btn
							v-for="course in courses"
							:key="course.iD"
							tile
							@click="showStudents2"
							style="border-left: 10px double white; margin-bottom: 10px;"
							width="300"
							height="50"
							color="rgb(8,183,92)"
							block
							depressed
						>
							<span
								class="white--text text-uppercase font-weight-bold text-body-1"
								>{{ course.team }}</span
							>
							<v-spacer></v-spacer>
							<v-icon color="white">
								{{
									course.chevronRightLeft
										? 'mdi-chevron-right'
										: 'mdi-chevron-left'
								}}
							</v-icon>
						</v-btn>
					</div>
				</div>
			</div>
			<div class="mt-3">
				<v-btn
					tile
					@click="showTeam3"
					style="border-left: 5px solid white"
					width="300"
					height="50"
					color="rgb(3,148,71)"
					block
					depressed
				>
					<span class="white--text text-uppercase font-weight-bold text-body-1"
						>2 Kurslar</span
					>
					<v-spacer></v-spacer>
					<v-icon color="white">
						{{ chevronDownUp3 ? 'mdi-chevron-down' : 'mdi-chevron-up' }}
					</v-icon>
				</v-btn>
				<div style="margin-top:10px" v-if="showedTeam3">
					<div>
						<v-btn
							v-for="course in courses"
							:key="course.iD"
							tile
							@click="showStudents3"
							style="border-left: 10px double white; margin-bottom: 10px;"
							width="300"
							height="50"
							color="rgb(8,183,92)"
							block
							depressed
						>
							<span
								class="white--text text-uppercase font-weight-bold text-body-1"
								>{{ course.team }}</span
							>
							<v-spacer></v-spacer>
							<v-icon color="white">
								{{
									course.chevronRightLeft
										? 'mdi-chevron-right'
										: 'mdi-chevron-left'
								}}
							</v-icon>
						</v-btn>
					</div>
				</div>
			</div>
			<div class="mt-3">
				<v-btn
					tile
					@click="showTeam4"
					style="border-left: 5px solid white"
					width="300"
					height="50"
					color="rgb(3,148,71)"
					block
					depressed
				>
					<span class="white--text text-uppercase font-weight-bold text-body-1"
						>1 Kurslar</span
					>
					<v-spacer></v-spacer>
					<v-icon color="white">
						{{ chevronDownUp4 ? 'mdi-chevron-down' : 'mdi-chevron-up' }}
					</v-icon>
				</v-btn>
				<div style="margin-top:10px" v-if="showedTeam4">
					<div>
						<v-btn
							v-for="course in courses"
							:key="course.iD"
							tile
							@click="showStudents4"
							style="border-left: 10px double white; margin-bottom: 10px;"
							width="300"
							height="50"
							color="rgb(8,183,92)"
							block
							depressed
						>
							<span
								class="white--text text-uppercase font-weight-bold text-body-1"
								>{{ course.team }}</span
							>
							<v-spacer></v-spacer>
							<v-icon color="white">
								{{
									course.chevronRightLeft
										? 'mdi-chevron-right'
										: 'mdi-chevron-left'
								}}
							</v-icon>
						</v-btn>
					</div>
				</div>
			</div>
		</div>
		<div class="pt-5">
			<div class="d-flex">
				<span
					style="color: rgb(1,131,61);"
					class="text-uppercase font-weight-bold pl-15 text-md-h6"
					>Menejment fakultediniň sanly gatnaşyk hasabaty</span
				>
				<span
					class="text-uppercase font-weight-bold pl-16 text-subtitle-1 pt-1"
				>
					{{ date.getDate() }}.{{ date.getMonth() }}.{{ date.getFullYear() }}
				</span>
				<span class="text-uppercase font-weight-bold pl-16 text-subtitle-1 pt-1"
					>{{ date.getHours() }}:{{ date.getMinutes() }}:{{ date.getSeconds() }}
				</span>
				<v-badge
					class="pl-16 pr-5"
					:content="messages"
					:value="messages"
					color="green"
					overlap
				>
					<v-dialog
						v-model="dialog"
						transition="dialog-top-transition"
						max-width="550"
						height="700"
					>
						<template v-slot:activator="{ on, attrs }">
							<v-img
								v-bind="attrs"
								v-on="on"
								alt="sms"
								src="../assets/smsicon.png"
								transition="scale-transition"
							></v-img>
						</template>
						<template v-slot:default="dialog">
							<v-card>
								<v-toolbar color="green" dark
									>Türkmen Döwlet Ykdysadyýet we Dolandyryş Instituty</v-toolbar
								>
								<v-card-text>
									<div class="text-h5 pa-5">Bellikler!!!</div>
								</v-card-text>
								<v-card-actions class="justify-end">
									<v-btn text @click="dialog.value = false">
										<span class="green--text">Ýapmak</span>
									</v-btn>
								</v-card-actions>
							</v-card>
						</template>
					</v-dialog>
					<template v-slot:activator="{ on, attrs }">
						<v-img
							v-bind="attrs"
							v-on="on"
							alt="sms"
							src="../assets/smsicon.png"
							transition="scale-transition"
						></v-img>
					</template>
				</v-badge>
			</div>
		</div>
		<div>
			<div style="background-color: rgb(1,131,61);" class="mt-2 d-flex">
				<div style="background-color: white;" class="pa-4 mt-3">
					<span
						style="color: rgb(1,131,61);"
						class="pl-3 pr-3 text-uppercase font-weight-bold text-md-subtitle-2"
						>Gatnaşyk nyzam</span
					>
				</div>
				<div style="border-right: 2px solid rgb(8,183,92)" class="pa-3 ma-3">
					<span
						class="pr-7 pl-5 text-uppercase font-weight-bold white--text text-md-subtitle-2"
						>Sapaklaryň hasabaty</span
					>
				</div>
				<div style="border-right: 2px solid rgb(8,183,92)" class="pa-3 ma-3">
					<span
						class="pr-7 text-uppercase font-weight-bold white--text text-md-subtitle-2"
						>Aýlyk jemi</span
					>
				</div>
				<div style="border-right: 2px solid rgb(8,183,92)" class="pa-3 ma-3">
					<span
						class="pr-7 text-uppercase font-weight-bold white--text text-md-subtitle-2"
						>Umumy ýaşaýyş jaýy</span
					>
				</div>
				<div class="pa-3 ma-3">
					<span
						class="pl-7 text-uppercase font-weight-bold white--text text-md-subtitle-2"
						>Şertnama</span
					>
				</div>
			</div>
		</div>
		<div
			v-if="hideWhenShowTeams"
			style="height: calc(100vh - 132px);"
			class="d-flex align-center justify-center"
		>
			<div>
				<v-img
					alt="TDYDI"
					height="50"
					width="40"
					src="../assets/topargorkez.png"
					aspect-ratio="1"
					transition="scale-transition"
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
			</div>
			<div class="ml-5">
				<span style="color: rgb(1,131,61);" class="font-weight-bold text-md-h5"
					>Topar görkez</span
				>
			</div>
		</div>
		<teams-relation v-if="showWhenHiddedText"></teams-relation>
	</div>
</template>

<script>
import TeamsRelation from '@/components/TeamsRelation.vue';
export default {
	components: {
		TeamsRelation,
	},
	data() {
		return {
			hideWhenShowTeams: true,
			showWhenHiddedText: false,
			showedTeam: false,
			showedTeam1: false,
			showedTeam3: false,
			chevronDownUp: true,
			chevronDownUp1: true,
			chevronDownUp2: true,
			showedTeam2: false,
			chevroTeam3: false,
			chevronDownUp3: true,
			showedTeam4: false,
			chevronDownUp4: true,
			messages: 1,
			dialog: false,
			courses: [
				{ iD: 1, team: '2351-H', chevronRightLeft: false },
				{ iD: 2, team: '2251-H', chevronRightLeft: false },
				{ iD: 3, team: '2051-H', chevronRightLeft: false },
			],
			date: new Date(),
		};
	},
	methods: {
		watchTime() {
			setInterval(() => {
				this.date = new Date();
			}, 1000);
		},
		showTeam() {
			this.showedTeam = !this.showedTeam;
			this.showedTeam1 = false;
			this.showedTeam2 = false;
			this.showedTeam3 = false;
			this.showedTeam4 = false;
			this.chevronDownUp = !this.chevronDownUp;
			this.showWhenHiddedText = false;
			this.hideWhenShowTeams = true;
			this.chevronDownUp1 = true;
			this.chevronDownUp2 = true;
			this.chevronDownUp3 = true;
			this.chevronDownUp4 = true;
		},
		showTeam1() {
			this.showedTeam1 = !this.showedTeam1;
			this.showedTeam = false;
			this.showedTeam2 = false;
			this.showedTeam3 = false;
			this.showedTeam4 = false;
			this.chevronDownUp1 = !this.chevronDownUp1;
			this.showWhenHiddedText = false;
			this.hideWhenShowTeams = true;
			this.chevronDownUp = true;
			this.chevronDownUp2 = true;
			this.chevronDownUp3 = true;
			this.chevronDownUp4 = true;
		},
		showStudents(i) {
			this.courses[i].chevronRightLeft = !this.courses[i].chevronRightLeft;
			this.courses.forEach(course => {
				if (course.iD !== this.courses[i].iD) {
					course.chevronRightLeft = false;
				}
			});
			this.showWhenHiddedText = !this.showWhenHiddedText;
			this.hideWhenShowTeams = !this.hideWhenShowTeams;
		},
		showStudents1() {
			this.courses.forEach(course => {
				course.chevronRightLeft = !course.chevronRightLeft;
			});
			this.showWhenHiddedText = !this.showWhenHiddedText;
			this.hideWhenShowTeams = !this.hideWhenShowTeams;
		},
		showTeam2() {
			this.showedTeam2 = !this.showedTeam2;
			this.showedTeam1 = false;
			this.showedTeam = false;
			this.showedTeam3 = false;
			this.showedTeam4 = false;
			this.chevronDownUp2 = !this.chevronDownUp2;
			this.showWhenHiddedText = false;
			this.hideWhenShowTeams = true;
			this.chevronDownUp = true;
			this.chevronDownUp1 = true;
			this.chevronDownUp3 = true;
			this.chevronDownUp4 = true;
		},
		showStudents2() {
			this.courses.forEach(course => {
				course.chevronRightLeft = !course.chevronRightLeft;
			});
			this.showWhenHiddedText = !this.showWhenHiddedText;
			this.hideWhenShowTeams = !this.hideWhenShowTeams;
		},
		showTeam3() {
			this.showedTeam3 = !this.showedTeam3;
			this.showedTeam1 = false;
			this.showedTeam = false;
			this.showedTeam2 = false;
			this.showedTeam4 = false;
			this.chevronDownUp3 = !this.chevronDownUp3;
			this.showWhenHiddedText = false;
			this.hideWhenShowTeams = true;
			this.chevronDownUp = true;
			this.chevronDownUp1 = true;
			this.chevronDownUp2 = true;
			this.chevronDownUp4 = true;
		},
		showStudents3() {
			this.courses.forEach(course => {
				course.chevronRightLeft = !course.chevronRightLeft;
			});
			this.showWhenHiddedText = !this.showWhenHiddedText;
			this.hideWhenShowTeams = !this.hideWhenShowTeams;
		},
		showTeam4() {
			this.showedTeam4 = !this.showedTeam4;
			this.showedTeam1 = false;
			this.showedTeam = false;
			this.showedTeam2 = false;
			this.showedTeam3 = false;
			this.chevronDownUp4 = !this.chevronDownUp4;
			this.showWhenHiddedText = false;
			this.hideWhenShowTeams = true;
			this.chevronDownUp = true;
			this.chevronDownUp1 = true;
			this.chevronDownUp2 = true;
			this.chevronDownUp3 = true;
		},
		showStudents4() {
			this.courses.forEach(course => {
				course.chevronRightLeft = !course.chevronRightLeft;
			});
			this.showWhenHiddedText = !this.showWhenHiddedText;
			this.hideWhenShowTeams = !this.hideWhenShowTeams;
		},
	},
	created() {
		this.watchTime();
	},
};
</script>

<style scoped></style>
