<template>
  <div>
    <div v-if="showModalImage" @click="closeModalImage" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Seleccione Imagen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <div class="btn-group"
                role="group" aria-label="..."
                v-for="(brawl, id) in brawls"
                :key="id"
                @click="imageSelected(brawl)"
            >
            <img :src="brawl.image" width="100px">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</template>

<script>
  export default {
    props: ['showModalImage', 'brawls'],
    data() {
      return {
        value: false,
        id: '',
        image: '',
      }
    },
    methods: {
      imageSelected(brawl) {
        var id = this.currentUser.id;
        var url = 'users/' + id;
        axios.put(url, {id: id, image: brawl.image})
          .then(res => {
            this.$store.commit('USER_IMAGE', brawl);
            // this.$store.dispatch('getUser', brawl);
          })
          .catch(err => {
						console.log(err.response.data);
					});
      },
      closeModalImage() {
        this.$emit('closeModalImage', this.value);
        EventBus.$emit('close-imageUp', this.value);
      }
    },
  }
</script>

<style lang="scss" scoped>

</style>