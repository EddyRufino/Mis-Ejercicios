<template>
  <div>
    <div v-if="showModalColor" @click="closeModalColor" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"
                id="exampleModalLabel"
              >
              Seleccionar Color
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <div class="btn-group"
                  role="group" aria-label="..."
                  v-for="(brawl, id) in brawls"
                  :key="id"
                  @click="colorSelected(brawl)"
              >
              <button type="button" class="btn btn-secondary bg-dark m-2">
                <a :style="{color: brawl.color}"
                    class="p-4"
                    name="color"
                    v-text="`${currentUser.name}`">
                </a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  let user = document.head.querySelector('meta[name="user"]');
  export default {
    props: ['showModalColor', 'brawls'],
    data() {
      return {
        value: false,
        id: '',
        color: '',
      }
    },
    methods: {
      colorSelected(brawl) {
        var id = this.currentUser.id;
        var url = 'users/' + id;
        axios.put(url, {id: id, color: brawl.color})
          .then(res => {
            this.$store.commit('USER_COLOR', brawl);
            // this.$store.dispatch('getUser', brawl);
          })
          .catch(err => {
						console.log(err.response.data);
					});
      },
      closeModalColor() {
        this.$emit('closeModalColor', this.value);
        EventBus.$emit('close-btnUp', this.value);
      }
    },
  }
</script>

<style lang="scss">
  .modal-backdrop {
    display: none;
  }
</style>