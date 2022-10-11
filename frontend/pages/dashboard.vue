<!--<template class="align-self-md-center">
	<div class="p-5 m-auto">
		<p class="align-self-center text-bold text-justify">Profile</p>
		<p><b>User Name</b> : {{ $auth.user.name }}</p>
		<p><b>User Email</b> : {{ $auth.user.email }}</p>

		<div class="mt-5">
			<button type="button" class="p-2  btn-danger rounded" @click="logout">Logout</button>
	
		</div>
	</div>
</template>
<script>

	export default{
		middleware:'auth',

		methods:{
			async logout(){
				this.$nuxt.$loading.start();
				this.$auth.logout();
				this.$nuxt.$loading.finish();
				this.$router.push('/login');
			}
		}
	}
</script>-->

<template>
  <b-container fluid class="p-5">
    <!--<b-row>
      <b-col class="d-flex justify-content-end">
       
        <h2 class=" btn-toolbar text-white" v-if="$auth.loggedIn"><NuxtLink to='/iq_test/1'>Start IQTest</NuxtLink> </h2>
        <h2 class="btn-primary" v-else><NuxtLink to='/login'>Please Log in First!</NuxtLink> </h2>
      </b-col>
    </b-row>-->
    <b-row class="mt-3">
      <b-col>
        <b-table striped hover :items="data" :fields="fields">
          <template #cell(details)="row">
            <b-button
              size="sm"
              class="mr-2"
              tag="nuxt-link"
              :to="`/record/${row.item.id}`"
            >
              Details
            </b-button>
          </template>
        </b-table>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
import moment from "moment";
export default {

  async asyncData({ $axios, store }) {
    try {
      const data = await $axios.$get(`/api/v1/iq_test`);
      store.commit("SET_LANGUAGES", data.iq_tests);
      store.commit("SET_RECORDS", data.records);
      const tempData = [];
      data.iq_tests.map((element) => {
        tempData.push({
          language_id: element.id,
          answers: element.children
            ? Array.from({ length: element.children.length }, () => "")
            : null,
        });
      });
      store.commit("SET_INIT_ANSWERS", tempData);
      let items = data.records.map((record, index) => {
        return {
          id: record.id,
          "no.": index + 1,
          date: moment(record.created_at).format("DD-MM-YYYY"),
          correct_answers: record.details_answer.filter(
            (ans) => ans.status === 1
          ).length,
        };
      });
      return {
        data: items,
        fields: ["no.", "date", "correct_answers", "details"],
      };
    } catch (error) {
      console.log(error);
    }
  },
};
</script>
