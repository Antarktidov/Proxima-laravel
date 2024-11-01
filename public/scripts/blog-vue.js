const App = {
    data() {
        return {
            page: 1,
            blogs: [],
            isNextBlogsExists: true,
        }
    },
    async beforeMount() {
        await this.getBlogs();
        await this.checkIfNextBlogsExists();
        //console.log(this.blogs[0]['title']);
    },
    template: `
    <button v-if="page > 1" class="vue-btn" @click="showPrev">Показать предыдущие</button>
    <template v-for="blog in blogs">
    <div class="blog-item">
            <div class="blog-sub-item">
                <h3 class="blog-item-title">{{blog['title']}}</h3>
                <p class="blog-item-text">{{blog['content']}}</p>
            </div>
            <img class="blog-item-image"
            :src="'/Proxima-laravel/public/images/blog/' + blog['image']">
        </div>
        </template>
        <button v-if="isNextBlogsExists" class="vue-btn" @click="showNext">Показать ещё</button>`,
    methods: {
        async getBlogs() {
            try {
                const response = await fetch(`http://localhost/Proxima-laravel/public/api/blog?page=${this.page}`, {
                    method: "GET",
                    headers: {
                        'Content-Type': 'application/json', 
                    }
                });
                const result = await response.json();
                this.blogs = result;
            } catch (error) {
                console.error('Ошибка при получении данных:', error);
            }
        },
        async showNext() {
            this.page++;
            await this.getBlogs();

            if (typeof this.blogs[0] == 'undefined') {
                await this.showPrev();
            }
        },
        async showPrev() {
            this.page--;
            await this.getBlogs();
        },
    },
    async checkIfNextBlogsExists() {
        try {
            const response = await fetch(`http://localhost/Proxima-laravel/public/api/blog?page=${this.page + 1}`, {
                method: "GET",
                headers: {
                    'Content-Type': 'application/json', 
                }
            });
            const result = await response.json();

            console.log('Компутированный резулт: '+ result[0]);

            if (typeof result[0] == "undefined"){
                console.log('Ложь!');
                
                this.isNextBlogsExists = false;
            }
            else {
                console.log('Истина');
                this.isNextBlogsExists = true;
            }
        } catch (error) {
            console.error('Ошибка при получении данных:', error);
        }
    },
};

Vue.createApp(App).mount('#blogs-app');