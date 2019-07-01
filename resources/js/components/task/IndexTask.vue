<template>
  <div class="container">
    <div class="row">
      <div class="col-12">

        <table class="table table-hover table-striped">
          <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Operations</th>
          </tr>
          </thead>
          <tbody>
            <tr v-if="allTasks" v-for="task in allTasks">
              <td>
                <p>
                  {{ task.name }}
                </p>
              </td>
              <!--<td scope="row">{{ task.getId() }}</td>-->
              <!--<td>{{ task.getName() }}</td>-->
              <!--<td>{{ task.getDescription() }}</td>-->
              <!--<td>{{ (task.isDone()) ? 'true' : 'false' }}</td>-->
              <!--<td>&#45;&#45;</td>-->
            </tr>
          </tbody>
        </table>


      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "IndexTask",
    props: ['tasks'],
    created() {
      console.warn('Created');
      console.warn(JSON.parse(this.tasks));
    },
    data(){
      return {
        allTasks: this.tasks,
      }
    }

  }
</script>

<style scoped>

</style>