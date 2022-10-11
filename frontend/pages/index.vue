<template>
  <b-container fluid class="p-5">
    <b-row>
      <b-col class="d-flex justify-content-end">
      
        <h2 class="btn-toolbar text-white" v-if="$auth.loggedIn"><NuxtLink to='/iq_test/1'>Start IQTest</NuxtLink> </h2>
        <h2 class="btn-toolbar text-white" v-else><NuxtLink to='/login'>Please Log in First!</NuxtLink> </h2>
      </b-col>
    </b-row>
     </b-container>
</template>

<script>
import moment from "moment";
export default {
  name: "IndexPage",
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

    }
  
  
</script>
