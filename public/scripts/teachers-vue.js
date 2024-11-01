const App = {
    data() {
        return {
            teachers: [],
            city: 'all',
            studies: 'all',
            isTeacherListEmpty: false,
        }
    },
    template: `<form class="rendered-form">
            <div class="rendered-form-block">
                <div class="rendered-form-sub-block">
                <label class="">Город</label>
                    <select v-model="city" class="city-options"  name="city" id="">
                        <option value="all">Все</option>
                        <option value="Санкт-Петербург">Санкт-Петербург</option>
                        <option value="Москва">Москва</option>
                        <option value="Владивосток">Владивосток</option>
                        <option value="Пермь">Пермь</option>
                        <option value="Омск">Омск</option>
                    </select>
                </div>
                <div class="rendered-form-sub-block">
                <label>Кафедра</label>
                <select v-model="studies" class="study-options" name="studies" id="">
                    <option value="all">Все</option>
                    <template v-for="teacher in teachers">
                    <template v-for="department in teacher['departments']">
                    <option :value="department">{{department}}</option>
                    </template>
                    </template>
                </select>
                </div>
            </div>
            </form>
            <div class="teachers-block">
            <template v-for="teacher in teachers">
            <template v-if="(city === 'all' || city === teacher['city']) && (studies === 'all' || teacher['departments'].includes(studies) )">                       
                <div class="teacher-card">
                    <img class="teacher-photo" :src="'/Proxima-laravel/public/images/' + teacher['image']">
                    <h4 class="teacher-name">{{teacher['name']}}</h4>
                    <p class="teacher-studyes">
                    <template  v-for="(department, idx) in teacher['departments']">{{department}}<template v-if="idx !== teacher['departments'].length -1">, </template></template>
                    </p>
                    <span class="teacher-city">{{teacher['city']}}</span>
                </div>
            </template>
            </template>
            <p v-if="isTeacherListEmpty">Тут никого нет</p>
            </div>`,
            async beforeMount() {
                await this.getTeachers();
            },
            methods: {
                async getTeachers() {
                    try {
                        const response = await fetch('http://localhost/Proxima-laravel/public/api/teachers', {
                            method: "GET",
                            headers: {
                                'Content-Type': 'application/json', 
                            }
                        });
                        const result = await response.json();
                        this.teachers = result;
                    } catch (error) {
                        console.error('Ошибка при получении данных:', error);
                    }
                },
                onUpdateInput() {
                    this.teachers.forEach(teacher => {
                        if ((this.city === 'all' || this.city === teacher['city']) && (this.studies === 'all' || teacher['departments'].includes(this.studies) )) {
                            this.isTeacherListEmpty = false;
                        }
                    });
                    this.isTeacherListEmpty = true;
                },
            }
};

Vue.createApp(App).mount('#teachers-app');