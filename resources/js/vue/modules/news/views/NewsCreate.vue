<template>
  <b-container fluid>
    <b-row class="m-0 w-100">
      <b-col class="w-100 pr-lg-5" cols="12">
        <b-form @submit="onSubmit" @reset="onReset" v-if="show">
          <b-form-group
            label-cols-sm="2"
            id="cover-group"
            label="Cover Photo"
            label-for="coverPhoto"
          >
            <b-form-file
              v-show="coverPhoto"
              accept=".jpeg, .jpg"
              id="coverPhoto"
              :state="Boolean(url)"
              placeholder="Choose a file or drop it here..."
              drop-placeholder="Drop file here..."
              @change="showPhoto"
            ></b-form-file>
          </b-form-group>
          <div id="preview">
            <img v-if="url" :src="url" height="80px" />
          </div>
          <b-form-group
            label-cols-sm="2"
            id="title-group"
            label="Title"
            label-for="title"
          >
            <b-form-input
              id="title"
              v-model="form.title"
              placeholder="Enter Title"
              required
            ></b-form-input>
          </b-form-group>
          <b-form-group
            label-cols-sm="2"
            label="Description"
            label-for="description"
          >
            <b-form-input
              id="description"
              v-model="form.description"
              placeholder="Enter Description"
              required
            ></b-form-input>
          </b-form-group>
          <b-form-group label-cols-sm="2" label="Content" label-for="content">
            <ckeditor
              id="content"
              v-model="form.content"
              :config="editorConfig"
            ></ckeditor>
          </b-form-group>

          <b-row class="w-100 m-0 p-0">
            <b-col class="pl-0 pr-0" lg="6">
              <b-form-group
                label-cols-lg="4"
                id="category-group"
                label="Category"
                label-for="category"
              >
                <b-form-select
                  v-model="form.category"
                  :options="options"
                ></b-form-select>
              </b-form-group>
            </b-col>
            <b-col class="pl-0 pr-0" lg="6">
              <b-form-group
                class="pl-lg-4"
                label-cols-lg="4"
                id="written_by-group"
                label="Written by"
                label-for="written_by"
              >
                <b-form-input
                  id="written_by"
                  v-model="form.written_by"
                  placeholder="Written by"
                  required
                ></b-form-input>
              </b-form-group>
            </b-col>
          </b-row>

          <b-row class="w-100 m-0 p-0">
            <b-col class="pl-0 pr-0" lg="6">
              <b-form-group
                label-cols-lg="4"
                id="news_source-group"
                label="News Source"
                label-for="news_source"
              >
                <b-form-input
                  id="news_source"
                  v-model="form.news_source"
                  placeholder="News Source"
                  required
                ></b-form-input>
              </b-form-group>
            </b-col>
            <b-col class="pl-0 pr-0" lg="6">
              <b-form-group
                class="pl-lg-4"
                label-cols-lg="4"
                id="photo_source-group"
                label="Photo source / credit"
                label-for="photo_source"
              >
                <b-form-input
                  id="photo_source"
                  v-model="form.photo_source"
                  placeholder="Photo source / credit"
                  required
                ></b-form-input>
              </b-form-group>
            </b-col>
          </b-row>
          <b-form-group
            label-cols-sm="2"
            id="scdedule-group"
            label="Schedule"
            label-for="scdedule"
          >
            <b-col class="pl-0 pr-0" lg="4">
             <b-form-datepicker id="example-datepicker" v-model="form.schedule" class="mb-2"></b-form-datepicker>
            </b-col>
          </b-form-group>
          <b-form-group
            label-cols-sm="2"
            id="highlight-group"
            label="Highlight"
            label-for="highlight"
          >
            <b-col class="pl-0 pr-0" lg="4">
              <b-form-input
                id="highlight"
                v-model="form.highlight"
                placeholder="Enter highlight"
                required
              ></b-form-input>
            </b-col>
          </b-form-group>
          <hr style="border:1px solid lightgray" />
          <div
            v-for="(accordion, index) in form.accordions"
            :key="'accordiion' + index"
          >
            <b-row class="w-100 m-0 p-0">
              <b-col class="text-left" lg="2">
                <div v-if="index == 0">
                  Accordion
                </div>
              </b-col>
              <b-col class="text-left" lg="10">
                <div class="text-right">
                  <svg
                    style="cursor:pointer;"
                    @click="removeElement('accordion', index)"
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="red"
                    class="bi bi-x-circle"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                    />
                    <path
                      d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                    />
                  </svg>
                </div>
                <b-form-group
                  label-cols-sm="2"
                  :id="'accordionTitleLabel' + index"
                  label="Title"
                  :label-for="'accordionTitle' + index"
                >
                  <b-form-input
                    :id="'accordionTitle' + index"
                    v-model="accordion['title']"
                    type="text"
                    placeholder="Title"
                    required
                  ></b-form-input>
                </b-form-group>
                <b-form-group
                  label-cols-sm="2"
                  :id="'accordionCaptionLabel' + index"
                  label="Caption"
                  :label-for="'accordionCaption' + index"
                >
                  <ckeditor
                    editor="InLineEditor"
                    :id="'accordionCaptionLabel' + index"
                    v-model="accordion['caption']"
                    :config="editorConfig"
                  ></ckeditor>
                </b-form-group>
              </b-col>
            </b-row>
          </div>
          <b-col class="ml-lg-auto" lg="10">
            <b-button
              type="button"
              @click="addElement('accordion')"
              variant="primary"
              >Add</b-button
            >
          </b-col>

          <hr style="border:1px solid lightgray" />

          <div
            v-for="(photo, index) in form.photo_gallery"
            :key="'photo_gallery' + index"
          >
            <div class="text-right">
              <svg
                v-b-tooltip.hover
                title="Delete"
                style="cursor:pointer;"
                @click="removeElement('photo_gallery', index)"
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="red"
                class="bi bi-x-circle"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                />
                <path
                  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                />
              </svg>
            </div>
            <b-row>
              <b-col class="text-center" cols="2">
                <div v-if="index == 0">
                  Photo Gallery
                </div>
              </b-col>
              <b-col class="text-left" cols="4">
                <!-- <img height="90%" width="100%" :src="photo['image']" alt="" /> -->
                <label class="container" :for="'photo_gallery' + index">
                  <div v-show="photo['image']">
                    <img :src="photo['image']" class="img-thumbnail image" />
                  </div>
                  <div v-show="photo['image']" class="middle">
                    <div class="text">Change</div>
                  </div>
                  <div>
                    <!-- <img
                      src="/icons/add.png"
                      alt=""
                      width="50px"
                      height="50px"
                    /> -->
                  </div>
                </label>
                <b-form-file
                  v-show="!photo['image']"
                  accept=".jpeg, .jpg"
                  :id="'photo_gallery' + index"
                  :state="Boolean(photo['image'])"
                  placeholder="Choose a file or drop it here..."
                  drop-placeholder="Drop file here..."
                  @change="showPhoto"
                  :data-index="index"
                  data-type="photo"
                ></b-form-file>
              </b-col>
              <b-col class="text-left" lg="6">
                <b-form-group
                  label-cols-sm="2"
                  :id="'photoTitleLabel' + index"
                  label="Title"
                  :label-for="'photoTitle' + index"
                >
                  <b-form-input
                    :id="'photoTitle' + index"
                    v-model="photo['title']"
                    type="text"
                    placeholder="Title"
                    required
                  ></b-form-input>
                </b-form-group>
                <b-form-group
                  label-cols-sm="2"
                  :id="'photoCaptionLabel' + index"
                  label="Caption"
                  :label-for="'photoCaption' + index"
                >
                  <b-form-input
                    :id="'photoCaption' + index"
                    v-model="photo['caption']"
                    type="text"
                    placeholder="Caption"
                    required
                  ></b-form-input>
                </b-form-group>
              </b-col>
            </b-row>
          </div>
          <b-col class="ml-lg-auto" lg="10">
            <b-button
              type="button"
              @click="addElement('photo_gallery')"
              variant="primary"
              >Add</b-button
            >
          </b-col>
          <hr style="border:1px solid lightgray" />
          <div
            v-for="(wide, index) in form.wide_gallery"
            :key="'wide_gallery' + index"
          >
            <div class="text-right">
              <svg
                v-b-tooltip.hover
                title="Delete"
                style="cursor:pointer;"
                @click="removeElement('wide_gallery', index)"
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="red"
                class="bi bi-x-circle"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"
                />
                <path
                  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                />
              </svg>
            </div>
            <b-row>
              <b-col class="text-center" cols="2">
                <div v-if="index == 0">
                  Wide Gallery
                </div>
              </b-col>
              <b-col class="text-left" cols="4">
                <label class="container" :for="'wide_gallery' + index">
                  <div v-show="wide['image']">
                    <img :src="wide['image']" class="img-thumbnail image" />
                  </div>
                  <div v-show="wide['image']" class="middle">
                    <div class="text">Change</div>
                  </div>
                </label>
                <b-form-file
                  v-show="!wide['image']"
                  accept=".jpeg, .jpg"
                  :id="'wide_gallery' + index"
                  :state="Boolean(wide['image'])"
                  placeholder="Choose a file or drop it here..."
                  drop-placeholder="Drop file here..."
                  @change="showPhoto"
                  :data-index="index"
                  data-type="wide"
                ></b-form-file>
              </b-col>
              <b-col class="text-left" lg="6">
                <b-form-group
                  label-cols-sm="2"
                  :id="'wideTitleLabel' + index"
                  label="Title"
                  :label-for="'wideTitle' + index"
                >
                  <b-form-input
                    :id="'wideTitle' + index"
                    v-model="wide['title']"
                    type="text"
                    placeholder="Title"
                    required
                  ></b-form-input>
                </b-form-group>
                <b-form-group
                  label-cols-sm="2"
                  :id="'wideCaptionLabel' + index"
                  label="Caption"
                  :label-for="'wideCaption' + index"
                >
                  <b-form-input
                    :id="'wideCaption' + index"
                    v-model="wide['caption']"
                    type="text"
                    placeholder="Caption"
                    required
                  ></b-form-input>
                </b-form-group>
              </b-col>
            </b-row>
          </div>
          <b-col class="ml-lg-auto" lg="10">
            <b-button
              type="button"
              @click="addElement('wide_gallery')"
              variant="primary"
              >Add</b-button
            >
          </b-col>
          <hr style="border:1px solid lightgray" />

          <!-- <b-button type="button" @click="addElement('photo')" variant="primary"
                >Add</b-button
              > -->
          <b-button type="submit" variant="primary">Submit</b-button>
          <b-button type="reset" variant="danger">Reset</b-button>
        </b-form>
        <b-card class="mt-3" header="Form Data Result">
          <pre class="m-0">{{ $data }}</pre>
        </b-card>
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
export default {
  name: 'NewsCreate',
  data() {
    return {
      editorConfig: {
        // The configuration of the editor.
      },
      url: null,
      options: [
        { value: null, text: 'Please select an option' },
        { value: 'a', text: 'This is First option' },
        { value: 'b', text: 'Selected Option' },
        { value: { C: '3PO' }, text: 'This is an option with object value' },
        { value: 'd', text: 'This one is disabled', disabled: true },
      ],
      form: {
        cover: {
          image: '',
          title: '',
          caption: '',
        },
        title: '',
        description: '',
        content: '',
        category: [],
        written_by: '',
        news_source: '',
        photo_source: '',
        news_tag: [],
        suggested_tag: [],
        schedule: '',
        highlight: false,
        accordions: [
          {
            title: 'a1',
            caption: 'a1',
          },
          {
            title: 'a2',
            caption: 'a2',
          },
        ],
        photo_gallery: [
          {
            title: 'p1',
            caption: 'p1',
            image: null,
          },
          {
            title: 'p2',
            caption: 'p2',
            image: null,
          },
        ],
        wide_gallery: [
          {
            title: 'w1',
            caption: 'w1',
            image: null,
          },
          {
            title: 'w2',
            caption: 'w2',
            image: null,
          },
        ],
      },
      coverPhoto: true,
      show: true,
    };
  },

  methods: {
    addElement(type) {
      if (type == 'accordion') {
        this.form.accordions.push({
          title: '2',
          caption: '2',
        });
      }
      if (type == 'photo_gallery') {
        this.form.photo_gallery.push({
          title: '2',
          caption: '2',
          image: null,
        });
      }
      if (type == 'wide_gallery') {
        this.form.wide_gallery.push({
          title: '2',
          caption: '2',
          image: null,
        });
      }
    },
    removeElement(type, id) {
      console.log(type, id);
      if (type == 'accordion') {
        if (this.form.accordions.length > 1) {
          this.form.accordions = this.form.accordions.filter((item, index) => {
            return index !== id;
          });
        }
      }
      if (type == 'photo_gallery') {
        this.form.photo_gallery = this.form.photo_gallery.filter(
          (item, index) => {
            return index !== id;
          }
        );
      }
      if (type == 'wide_gallery') {
        this.form.wide_gallery = this.form.wide_gallery.filter(
          (item, index) => {
            return index !== id;
          }
        );
      }
    },

    showPhoto(e) {
      console.log(e);
      var type = e.target.dataset.type;
      if (type == 'photo') {
        console.log(e.target.dataset.type);

        const file = e.target.files[0];

        this.form.photo_gallery[e.target.dataset.index][
          'image'
        ] = URL.createObjectURL(file);
      }

      if (type == 'wide') {
        const file = e.target.files[0];

        this.form.wide_gallery[e.target.dataset.index][
          'image'
        ] = URL.createObjectURL(file);
      }

      // const file = e.target.files[0];
      // this.url = URL.createObjectURL(file);
      // this.coverPhoto = false;
    },
    onSubmit(event) {
      event.preventDefault();
      alert(JSON.stringify(this.form));
    },
    onReset(event) {
      event.preventDefault();
      // Reset our form values
      this.form.email = '';
      this.form.name = '';
      this.form.food = null;
      this.form.checked = [];
      // Trick to reset/clear native browser form validation state
      this.show = false;
      this.$nextTick(() => {
        this.show = true;
      });
    },
  },
};
</script>

<style scoped>
.middle {
  transition: 0.5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
.text {
  background-color: #04aa6d;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}
</style>
