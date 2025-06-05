import { Injectable } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { Task } from './task.entity';
import { Repository } from 'typeorm';

@Injectable()
export class TaskService {
  constructor(
    @InjectRepository(Task)
    private taskRepo: Repository<Task>,
  ) {}

  getAllTasks() {
    return this.taskRepo.find();
  }
  getTask(id: number) {
    return this.taskRepo.findOne({ where: { id } });
  }

  createTask(body: Partial<Task>) {
    const task = this.taskRepo.create(body);
    return this.taskRepo.save(task);
  }

  updateTask(id: string, body: any) {
    console.log(body);
    return {
      name: 'Task 1',
      description: 'Description of Task 1',
      createdAt: new Date().toISOString(),
      completedAt: null,
      userId: 1,
    };
  }
  deleteTask(id: string) {
    console.log(id);
    return { message: 'success' };
  }

  deleteAllTasks() {
    return this.taskRepo.clear();
  }
}
