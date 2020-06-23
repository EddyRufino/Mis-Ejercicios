<template>
  <div>
  <div v-if="showModal"  class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" 
              id="staticBackdropLabel"
              :style="{color: this.$store.state.color}"
              v-text="`${currentUser.name}`"
            >
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <button @click="openModalColor"
                type="button" 
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#exampleModal"
            >
            Color del nombre
          </button>
          <button @click="openModalImage"
                type="button" 
                class="btn btn-primary"
                data-toggle="modal"
                data-target="#exampleModal"
            >
            Imagen del nombre
          </button>

          <brawl-color-selected
              :brawls="brawls"
              :showModalColor="showModalColor"
              @closeModalColor="closeModalColor"
            >
          </brawl-color-selected>
          <brawl-image-selected
              :brawls="brawls"
              :showModalImage="showModalImage"
              @closeModalImage="closeModalImage"
            >
          </brawl-image-selected>
        </div>
      </div>
    </div>
  </div>
  </div>
</template>

<script>
  export default {
    props: ['showModal'],
    data() {
      return {
        brawls: [],
        value: false,
        showModalColor: false,
        showModalImage: false,
      }
    },
    created() {
      this.getBrawls();
    },
    methods: {
      getBrawls() {
        axios.get('/brawls').then(res => {
          this.brawls = res.data.data;
        })
      },
      openModalColor() {
        this.showModalColor = true;
      },
      closeModalColor(value) {
        this.showModalColor = value;
      },
      closeModal() {
        this.$emit('closeModal', this.value);
      },
      openModalImage() {
        this.showModalImage = true;
      },
      closeModalImage(value) {
        this.showModalImage = value;
      },
    },
  }
</script>

<style lang="scss" scoped>

</style>