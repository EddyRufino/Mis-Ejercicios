<template>
  <div>
    <brawl-color-selected
        :brawls="brawls"
        :showModal="showModal"
        @closeModal="closeModal"
      >
    </brawl-color-selected>

    <div  @click="openModal" data-toggle="modal" data-target="#exampleModal">
      <button :style="{color: this.$store.state.color}"
              v-text="`${currentUser.name}`"
              class="btn btn-secondary bg-dark"
          >
      </button>
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
      closeModal(value) {
        this.showModal = value;
      }
    },
  }
</script>

<style lang="scss" scoped>

</style>