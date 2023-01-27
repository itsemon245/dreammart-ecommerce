export default function InputLabel({ forInput, value, className, children }) {
    return (
        <label htmlFor={forInput} className={`label-text` + className}>
            {value ? value : children}
        </label>
    );
}
