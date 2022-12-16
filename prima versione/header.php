<div class="header_nav">
    <img class="logo" src="https://grafica-facile.com/wp-content/uploads/2022/01/spotify-logo.png" alt="logo">
    <label for="select-genres">
      <select id="select-genres"
        v-model="genreFilter"
        name="genre"
        @change="genreChange">
        <option value="All"> All Genres</option>
        <option v-for="genre in genresList"
          :key="genre"
          :value="genre">
          {{genre}}
        </option>
      </select>
    </label>
</div>