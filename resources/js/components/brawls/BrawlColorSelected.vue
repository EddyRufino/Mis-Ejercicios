<template>
  <div>
    <div v-if="showModal" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Seleccionar Color</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ul class="list-group list-group-horizontal">
              <li class="brawlColor list-group-item" 
                v-for="(brawl, id) in brawls"
                :key="id"
                :style="{background: brawl.color}"
                @click="colorSelected(brawl)"
              >
                {{ brawl.color }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- <ul style="list-style: none;">
      <li class="brawlColor" :style="{background: this.$store.state.color}">
        {{this.$store.state.color}}
      </li>
    </ul> -->
  </div>
      <!-- <li class="brawlColor" :style="{background: brawl.color}">{{brawl.color}}</li> -->
</template>

<script>
  export default {
    props: ['showModal', 'brawls'],
    data() {
      return {
        // color: ''
      }
    },
    methods: {
      colorSelected(brawl) {
        this.$store.state.color = brawl.color;
        // console.log(this.color);
      }
    },
  }
</script>

<style lang="scss">
.brawlColor {
  width: 8em;
  height: 2em;
  padding: 0 0 0 1.5em;
}
</style>