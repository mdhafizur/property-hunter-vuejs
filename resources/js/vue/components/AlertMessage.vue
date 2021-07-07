<template>
  <div>
    <b-alert v-model="showDismissibleAlert" :variant="variant" dismissible>
      {{message}}
    </b-alert>
  </div>
</template>

<script>
export default {
  name: 'AlertMessage',
  data() {
    return {
      showDismissibleAlert: true,
    };
  },
  props: {
    message: {
      type: String,
      required: true,
    },
    variant: {
      type: String,
      required: true,
    },
  },
};
</script>
