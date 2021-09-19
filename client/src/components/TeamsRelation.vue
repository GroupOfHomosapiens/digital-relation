<template>
	<section>
		<div class="mt-1">
			<template>
				<v-simple-table height="521px">
					<template v-slot:default>
						<thead class="tableHeadColor">
							<tr class="d-flex">
								<th class="d-inline-flex">
									<span
										class="pa-3 text-uppercase black--text font-weight-bold text-md-subtitle-2"
										>t/b</span
									>
								</th>
								<th
									style="width: 350px;"
									class="d-inline-flex justify-center ml-1"
								>
									<span
										class="pa-3 font-weight-bold black--text text-md-subtitle-2"
										>Familiýasy ady</span
									>
								</th>
								<th
									style="width: 150px;"
									class="d-inline-flex justify-center ml-1 positionSticky1"
								>
									<span
										class="pa-3 font-weight-bold black--text text-md-subtitle-2"
										>Bellik</span
									>
								</th>
								<th
									style="width: 150px;"
									class="d-inline-flex justify-center ml-1"
								>
									<span
										class="pa-3 font-weight-bold black--text text-md-subtitle-2"
										>Sebäpli</span
									>
								</th>
								<th
									style="width: 150px;"
									class="d-inline-flex justify-center ml-1"
								>
									<span
										class="pa-3 font-weight-bold black--text text-md-subtitle-2"
										>Sebäpsiz</span
									>
								</th>
								<th
									style="background-color: rgb(1,131,61); width: 150px; cursor:pointer;"
									class="d-inline-flex justify-center ml-1"
									@click="checkedAll"
								>
									<span
										class="pa-3 font-weight-bold white--text text-md-subtitle-2"
										>Hemmesi</span
									>
								</th>
							</tr>
						</thead>
						<tbody v-for="(student, i) in students" :key="i">
							<tr class="d-flex">
								<td
									:style="bgColor(i)"
									class="d-inline-flex bgWidthdAndHeight bgColor"
								>
									<span
										class="pa-3 text-uppercase black--text font-weight-bold text-md-subtitle-2"
										>{{ student.id }}</span
									>
								</td>
								<td style="" class="d-inline-flex align-center bgWidth">
									<span
										class="pa-3 font-weight-bold black--text text-md-subtitle-2"
										>{{ student.name }}</span
									>
								</td>
								<td
									style=""
									class="pa-3 d-inline-flex justify-center ml-1 checkBoxWidth"
								>
									<v-simple-checkbox
										v-model="student.checkBoxToMark"
										:ripple="false"
										color="blue"
									></v-simple-checkbox>
								</td>
								<td
									style=""
									class="pa-3 d-inline-flex justify-center ml-1 checkBoxWidth"
								>
									<v-simple-checkbox
										v-model="student.checkBoxReasonable"
										:ripple="false"
										color="yellow"
									></v-simple-checkbox>
								</td>
								<td
									style=""
									class="pa-3 d-inline-flex justify-center ml-1 checkBoxWidth"
								>
									<v-simple-checkbox
										v-model="student.checkBoxUnReasonable"
										:ripple="false"
										color="red"
									></v-simple-checkbox>
								</td>
								<td
									style=""
									class="pa-3 d-inline-flex justify-center ml-1 checkBoxWidth"
								>
									<v-simple-checkbox
										v-model="student.checkBoxAll"
										:ripple="false"
										color="green"
									></v-simple-checkbox>
								</td>
							</tr>
						</tbody>
						<tfoot>
							<td>
								<v-btn
									:loading="loading"
									class="ma-5 float-right white--text pa-5"
									color="green"
									@click="remove"
								>
									{{ text }}
								</v-btn>
							</td>
						</tfoot>
					</template>
				</v-simple-table>
			</template>
		</div>
	</section>
</template>

<script>
export default {
	data() {
		return {
			loading: false,
			text: 'Tassyklamak',
			students: [
				{
					id: 1,
					name: 'Ahmedow Shanazar',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 2,
					name: 'Akmammedowa Aybolek',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 3,
					name: 'Alimowa Roza',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 4,
					name: 'Atayew Myrat',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 5,
					name: 'Atayewa Aygozel',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 6,
					name: 'Amanow Orazmuhammet',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 7,
					name: 'Ataberdiyewa Zubeyda',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 8,
					name: 'Bayramow Dowletgeldi',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 9,
					name: 'Bayramow Muhammetmyrat',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 10,
					name: 'Baysahedow Yusup',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 11,
					name: 'Deryayewa Jennet',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 12,
					name: 'Halmyradowa Soltanbagt',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 13,
					name: 'Kakysowa Aknur',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 14,
					name: 'Jumayew Muhammetnazar',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 15,
					name: 'Saparow Bayram',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 16,
					name: 'Orazgeldiyew Yslam',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 17,
					name: 'Soltanmyradowa Medine',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 18,
					name: 'Owezgelidiyewa Ogulkeyik',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 19,
					name: 'Hojagulyyewa Cynargul',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
				{
					id: 20,
					name: 'Yagsymyradow Yhlas',
					checkBoxToMark: false,
					checkBoxReasonable: false,
					checkBoxUnReasonable: false,
					checkBoxAll: false,
				},
			],
		};
	},
	methods: {
		async remove() {
			this.loading = true;

			await new Promise(resolve => setTimeout(resolve, 2000));

			this.loading = false;
			this.text = 'Tassyklandy !';
			this.students.forEach(student => {
				student.checkBoxToMark = false;
				student.checkBoxReasonable = false;
				student.checkBoxUnReasonable = false;
				student.checkBoxAll = false;
			});
		},
		checkedAll() {
			return this.students.forEach(student => {
				student.checkBoxAll = !student.checkBoxAll;
			});
		},
		bgColor(i) {
			if (i / 2 !== Math.floor(i / 2)) {
				return 'background-color: red';
			} else {
				return 'background-color: white;';
			}
		},
	},
};
</script>

<style scoped>
.tableHeadColor {
	background: rgb(226, 247, 242) !important;
}
.bgWidthdAndHeight {
	width: 80px;
	height: 55px;
}
.bgWidth {
	width: 350px;
}
.checkBoxWidth {
	width: 150px;
}
</style>
