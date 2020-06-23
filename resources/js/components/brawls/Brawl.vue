<template>
  <div>
    <choose-image-color
        :showModal="showModal"
        @closeModal="closeModal"
      >
    </choose-image-color>

    <div @click="openModal"
          data-toggle="modal" 
          data-target="#staticBackdrop"
          class="card text-center"
          style="width: 12rem;"
      >
      <!-- Inicia en true pero se vuelve false cuando eligen una imagen -->
      <img v-if="showImageUp" :src="this.users[this.currentUser.id - 1 ].image" class="card-img-top centrarImagen" style="width: 118px;" alt="...">
      <!-- Inicia en false pero se vuelve true cuando eligen una imagen -->
      <img v-if="showImageDown" :src="this.$store.state.image" class="card-img-top centrarImagen" style="width: 118px;" alt="...">
      <div class="card-body">
        <!-- Inicia en true pero se vuelve false cuando eligen un color -->
        <button
            :style="{color: this.users[this.currentUser.id - 1 ].color}"
            v-text="`${currentUser.name}`"
            class="btn btn-secondary bg-dark"
            v-if="showBtnUp"
            
          >
      </button>
      <!-- Inicia en false pero se vuelve true cuando eligen un color -->
      <button
            v-if="showBtnDown"
            :style="{color: this.$store.state.color}"
            v-text="`${currentUser.name}`"
            class="btn btn-secondary bg-dark"
          >
      </button>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        users: null,
        showBtnUp: true,
        showBtnDown: false,
        showModal: false,
        showImageUp: true,
        showImageDown: false,
      }
    },
    mounted() {
			EventBus.$on('close-btnUp', status => {
				this.showBtnUp = status;
				this.showBtnDown = !status;
      }),
			EventBus.$on('close-imageUp', status => {
				this.showImageUp = status;
				this.showImageDown = !status;
			})
    },
    methods: {
      getUsers() {
        axios.get('/users').then(res => {
          this.users = res.data.data;
        })
      },
      openModal() {
        this.showModal = true;
      },
      closeModal(value) {
        this.showModal = value;
      },
    },
    created() {
      this.getUsers();
    },
  }
</script>

<style lang="scss" scoped>
  .centrarImagen {
    position: relative;
    width: 100px;
    top: .5em;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
  }
</style>