<template>
  <div>
    <div v-if="showModal" @click="closeModal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <div class="modal-body">
            <div class="btn-group"
                  role="group" aria-label="..."
                  v-for="(brawl, id) in brawls"
                  :key="id"
                  @click="colorSelected(brawl)"
              >
              <button type="button" class="btn btn-secondary bg-dark m-2">
                <a :style="{color: brawl.color}"
                    class="p-4"
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
  export default {
    props: ['showModal', 'brawls'],
    data() {
      return {
        value: false,
      }
    },
    methods: {
      colorSelected(brawl) {
        this.$store.state.color = brawl.color;
      },
      closeModal() {
        this.$emit('closeModal', this.value);
      }
    },
  }
</script>

<style lang="scss">
  .modal-backdrop {
    display: none;
  }
</style>