<header>
    <div class="container">
        <div class="box-img">
            <img src="../assets/img/dc-logo.png" alt="DC logo">
        </div>
        <nav>
            <ul>
                <li v-for="(category,index) in categories" @click="changeActiveIndex(index)" :class="index == ActiveIndex ? 'active' : '' ">
                    {{ category }}
                </li>
            </ul>
        </nav>
    </div>
</header>