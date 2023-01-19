import { Link } from '@inertiajs/inertia-react';

export default function NavLink({ href, active, children }) {
    return (
        <Link
            id='link'
            href={href}
            className='text-dark hover:bg-neutral px-5 py-3 rounded transition-all'
        >
            {children}
        </Link>
    );
}
