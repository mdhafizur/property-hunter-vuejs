<template>
  <div>
    News
    <b-container>
      <b-row>
        <b-col>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody v-for="(newss, index) in news" :key="index">

                    <tr>
                      <td>{{ newss['d_title'] }}</td>
                      <td>{{ newss['created_by'] }}</td>
                      <td>{{ newss['status'] }}</td>
                      <td><router-link :to="{name:'news.show', params: { id: newss.id}}">View</router-link></td>
                    </tr>

              </tbody>
            </table>
          </div>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
export default {
  name: 'NewsIndex',
  data() {
    return {
      news: [],
    };
  },
  methods: {
    getNewsListing() {
      axios
        .get('http://localhost:8000/api/news')
        .then((response) => {
            console.log(response);

          if (response.status == 200) {
            this.news = response.data.data;
            console.log(this.news);
          }
          if (response.status == 204) {
            alert(response.statusText);
          }
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  mounted() {
    this.getNewsListing();
  },
};
</script>
