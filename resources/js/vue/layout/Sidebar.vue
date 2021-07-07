<template>
  <div>
    <ul class="p-0">
      <li>
        <router-link :to="{ name: 'NewsModule' }">Dashboard </router-link>
      </li>
      <li >
        <router-link :to="{ name: 'news.index' }">News Listing </router-link>
      </li>
      <li>
        <router-link :to="{ name: 'news.create' }">Add News </router-link>
      </li>
      <li>
        <router-link :to="{ name: 'news.create' }">Add News </router-link>
      </li>
      <li>
        <router-link :to="{ name: 'news.create' }">Add News </router-link>
      </li>
      {{
        selected
      }}
    </ul>
  </div>
</template>

<script>
export default {
  name: 'Sidebar',
  props: {
    selectedNav: {
      type: String,
    },
  },
  data() {
    return {
      selected: 'dashboard',
    };
  },
  methods: {
    navSelected(name) {
      this.selected = name;
      this.$emit('selectedNav', this.selected);
    },
  },
};
</script>

<style scoped>
li {
  list-style-type: none;
  padding: 15px;
  text-align: center;
  cursor: pointer;
}

li:hover {
  background-color: lightgray;
}

.selected {
  background-color: lightgray;
}

.active-link-class {
   /* background-color: red; */

}
</style>
