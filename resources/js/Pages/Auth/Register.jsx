import { useEffect } from 'react';
import { SocialMedia } from '@/Components';
import CommonLayout from '@/Layouts/CommonLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { usePage, Link, useForm } from '@inertiajs/inertia-react';

export default function Register({ auth }) {
  const { data, setData, post, processing, reset } = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
  });
  const { messages, errors } = usePage().props
  useEffect(() => {
    return () => {
      reset('password', 'password_confirmation');
    };
  }, []);

  const onHandleChange = (event) => {
    setData(event.target.name, event.target.type === 'checkbox' ? event.target.checked : event.target.value);
  };

  const submit = (e) => {
    e.preventDefault();

    post(route('user.create'));
  };

  return (

    <CommonLayout pageTitle='Register' auth={auth} messages={messages}>
      <div className="flex justify-center mt-10 p-5">
        <div className="card max-w-5xl shadow-lg bg-base-300">
          <div className="grid md:grid-cols-3 grid-cols-2 items-center justify-center">
            <form onSubmit={submit} className='col-span-2 px-14 py-8'>
              <h1 className='text-primary text-xl font-bold text-center mb-4'>Create Account</h1>
              <SocialMedia />
              <div>
                <InputLabel forInput="name" value="Name" />

                <TextInput
                  id="name"
                  name="name"
                  value={data.name}
                  className="mt-1 block w-full"
                  autoComplete="name"
                  isFocused={true}
                  handleChange={onHandleChange}
                  required
                  placeholder='Full Name'
                />

                <InputError message={errors.name} className="mt-2" />
              </div>

              <div className="mt-4">
                <InputLabel forInput="email" value="Email" />

                <TextInput
                  id="email"
                  type="email"
                  name="email"
                  value={data.email}
                  className="mt-1 block w-full"
                  autoComplete="username"
                  handleChange={onHandleChange}
                  required
                  placeholder='example@email.com'
                />

                <InputError message={errors.email} className="mt-2" />
              </div>

              <div className="flex max-mini-tab:flex-col gap-4 mt-4">
                <div className='grow'>
                  <InputLabel forInput="password" value="Password" />

                  <TextInput
                    id="password"
                    type="password"
                    name="password"
                    value={data.password}
                    className="mt-1 block w-full"
                    autoComplete="new-password"
                    handleChange={onHandleChange}
                    required
                    placeholder='Min 8 characters'
                  />

                  <InputError message={errors.password} className="mt-2" />
                </div>
                <div className='grow'>
                  <InputLabel forInput="password_confirmation" value="Confirm Password" />

                  <TextInput
                    id="password_confirmation"
                    type="password"
                    name="password_confirmation"
                    value={data.password_confirmation}
                    className="mt-1 block w-full"
                    handleChange={onHandleChange}
                    required
                    placeholder='Combine letters'
                  />

                  <InputError message={errors.password_confirmation} className="mt-2" />
                </div>
              </div>




              <div className="flex items-center justify-between mt-4">
                <Link
                  href={route('login')}
                  className="link"
                >
                  Already registered?
                </Link>

                <PrimaryButton className="ml-4" processing={processing}>
                  Register
                </PrimaryButton>
              </div>
            </form>
            <div className='hidden md:flex bg-slate-900 rounded-r-box h-full items-center'>
              <img src="assets/registration.png" alt="" className='' />
            </div>
          </div>

        </div>
      </div>
    </CommonLayout>
  );
}
