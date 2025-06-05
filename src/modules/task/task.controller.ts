import {
  Body,
  Controller,
  Delete,
  Get,
  Param,
  ParseIntPipe,
  Patch,
  Post,
} from '@nestjs/common';
import { TaskService } from './task.service';

@Controller('tasks')
export class TasksController {
  constructor(private readonly taskService: TaskService) {}

  @Get()
  getAllTasks() {
    return this.taskService.getAllTasks();
  }

  @Get('/:id')
  getTask(@Param('id', ParseIntPipe) id: number) {
    return this.taskService.getTask(id);
  }
  @Post('/')
  createTask(@Body() body: { name: string; description?: string }) {
    return this.taskService.createTask(body);
  }

  @Patch('/:id/done')
  markTaskAsDone(@Body() body: any, @Param('id') id: string) {
    return this.taskService.updateTask(id, body);
  }

  @Patch('/:id/pending')
  markTaskAsPending(@Body() body: any, @Param('id') id: string) {
    return this.taskService.updateTask(id, body);
  }

  @Delete()
  clearTasks() {
    return this.taskService.deleteAllTasks();
  }

  @Delete('/:id')
  deleteTask(@Param('id') id: string) {
    return this.taskService.deleteTask(id);
  }
}
