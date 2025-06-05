import axios from "axios";
import { defineStore } from "pinia";

// id: 2,
// name: "Do homework",
// description: "Instruction on doing homework ....",
// createdAt: "2024-05-07 08:00:00",
// completedAt: "2024-05-07 08:10:00",
export const useTodoStore = defineStore("todo", {
  state: () => ({
    todos: [],
  }),
  getters: {
    countTodos: (state) => state.todos.length,
  },
  actions: {
    async fetchTodos() {
      try {
        const response = await axios.get('http://localhost:3100/tasks', { withCredentials: true });
        this.todos = response.data;
        console.log("FETCHED TODOS: ", this.todos)
      } catch (err) {
        this.error = 'Failed to fetch todos';
      }
    },
    toggleStatus(id) {
      const foundIndex = this.todos.findIndex((t) => t.id == id);
      if (foundIndex >= 0) {
        if (this.todos[foundIndex].completedAt != null) {
          this.todos[foundIndex].completedAt = null;
        } else {
          this.todos[foundIndex].completedAt = new Date().toISOString();
        }
      }
    },
    async createTodo(todo) {
      const response = await axios.post('http://localhost:3100/tasks', todo);
    },
    async addTodo(todo) {
      const newtodo = {
        id: this.todos.length + 1,
        name: todo,
        description: "description",
        createdAt: new Date().toISOString(),
        completedAt: null,
      };
      this.todos.push(newtodo);
      this.todos = JSON.parse(JSON.stringify(this.todos));
      await axios.post('http://localhost:3100/tasks', newtodo);
    },
    async clearAll() {
      this.todos = [];
      await axios.delete('http://localhost:3100/tasks');
    },
  },
});
