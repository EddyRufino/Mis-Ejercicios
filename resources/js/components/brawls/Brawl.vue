<template>
  <div>
    <brawl-color-selected  
        :brawls="brawls"
        :showModal="showModal"
      >
    </brawl-color-selected>

    <div  @click="openModal" data-toggle="modal" data-target="#exampleModal">
      <span class="brawlColor"
          :style="{color: this.$store.state.color}"
          @click="getUserById(users)"
          v-text="`${currentUser.name}`"
        >
      </span>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        brawls: [],
        showModal: false,
      }
    },
    created() {
      this.getBrawls();
    },
    methods: {
      getBrawls() {
        axios.get('/brawl').then(res => {
          this.brawls = res.data.data;
        })
      },
      openModal() {
        this.showModal = true;
      },
    },
  }
</script>

<style lang="scss" scoped>

</style>