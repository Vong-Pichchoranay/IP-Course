import { Injectable, NotFoundException } from '@nestjs/common';
import { InjectRepository } from '@nestjs/typeorm';
import { User } from './user.entity';
import { Repository } from 'typeorm';

@Injectable()
export class UserService {
  constructor(
    @InjectRepository(User)
    private userRepo: Repository<User>,
  ) {}

  createUser(body: Partial<User>) {
    const user = this.userRepo.create(body);
    return this.userRepo.save(user);
  }

  getAllUsers() {
    return this.userRepo.find({ relations: ['tasks'] });
  }

  async getUser(id: number) {
    const user = await this.userRepo.findOne({
      where: { id },
      relations: ['tasks'],
    });
    if (!user) {
      throw new NotFoundException(`User with id ${id} not found`);
    }
    return user;
  }

  async updateUser(id: number, updateData: Partial<User>) {
    // update info
    return await this.userRepo.update(id, { ...updateData });
  }
  deleteUser(id: number) {
    return this.userRepo.delete(id);
  }
}
