import { Injectable, NotFoundException } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Task } from './task.entity';
import { Repository } from 'typeorm';
import { CreateTaskDto } from './dto/create-task.dto';

@Injectable()
export class TaskService {
  constructor(
    @InjectRepository(Task)
    private taskRepo: Repository<Task>,
  ) {}

  getAllTasks() {
    return this.taskRepo.find();
  }
  async getTask(id: number) {
    const task = await this.taskRepo.findOne({ where: { id } });
    if (!task) {
      throw new NotFoundException(`Task with id ${id} does not exist`);
    }
    return task;
  }

  createTask(body: CreateTaskDto) {
    const task = this.taskRepo.create(body);
    return this.taskRepo.save(task);
  }

  async updateTask(id: number, body: Partial<Task>) {
    // find task by id
    const task = await this.taskRepo.findOne({ where: { id: id } });
    // update values
    if (task) {
      if (body.name) {
        task.name = body.name;
      }
      if (body.description) {
        task.description = body.description;
      }
      // save
      await this.taskRepo.save(task);
    }
  }
  deleteTask(id: string) {
    console.log(id);
    return { message: 'success' };
  }

  deleteAllTasks() {
    return this.taskRepo.clear();
  }
}
