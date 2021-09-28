<template>
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Deshbord-Home</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Default Datatable</h4>
                        <p class="card-text">
                            This is the most basic example of the datatables with zero configuration. Use the
                            <code>.datatable</code> class to initialize datatables.
                        </p>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="datatable table table-stripped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr v-for="(task, i ) in tasks" :key="i">
                                        <td >
                                            {{ t.id }} - {{ t.none }}
                                        </td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
// import { defineComponent } from '@vue/composition-api'

export default({
    data() {
        return{
            tasks:{},
        }
    },
    method:{

    },
    created(){
        axios.get("http:/ParsonalaBlog.local/tasks")
        .then((response) => this.tasks = response.data)
        .catch((error) =>console.log(error))
        console.log("Tesks Components..")
    }
})
</script>
