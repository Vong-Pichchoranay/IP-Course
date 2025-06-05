import { IsEmail, IsNotEmpty, MinLength } from 'class-validator';

export class CreateUserDto {
  @IsNotEmpty({ message: 'Username field is required' })
  username: string;

  @IsEmail()
  @IsNotEmpty({ message: 'Email field is required' })
  email: string;

  @MinLength(3)
  password: string;
}
