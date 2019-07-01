<template>

  <div class="col-8 mt-3">

    <div class="row">

      <div class="col-12">
        <h5>Recent tasks added</h5>
      </div>

      <div v-for="task in tasks" class="col-12">
        <h6>{{ task.name }}</h6>
        <p>{{ task.description }}</p>
      </div>
    </div>

    <form>
      <div v-if="error" class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
      </div>

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" v-model="name">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" name="description" v-model="description">
      </div>

      <button type="submit" @click.prevent="onSubmitTask" class="btn btn-primary">Submit</button>
    </form>

  </div>

</template>

<script>
  import axios from 'axios';

  export default {
    name: "NewTask",
    data(){
      return{
        name: null,
        description: null,
        tasks: [],
        error: null
      }
    },
    watch: {
      tasks: function (val) {
        console.warn('Tasks triggered');
      }
    },
    methods: {
      onSubmitTask() {

        if (this.name && this.description){
          this.error = false;

          axios.post('/task', {name: this.name, description: this.description}).then(resp => {
            this.tasks.push({name: this.name, description: this.description});
            this.name = this.description = null;
          }).catch(error => {
            console.warn(error.response)
          })


        } else
          this.error = true;
      }
    }
  }
</script>

<style scoped>

</style>