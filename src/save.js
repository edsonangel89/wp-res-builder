import { useBlockProps } from '@wordpress/block-editor';

export default function save() {
    return (
        <>
			<form { ...useBlockProps.save() }>
				<label>User</label>
				<input type='text' />
				<label>Password</label>
				<input type='text' />
				<input type='submit' />
			</form>
		</>
    );
}

/*
<p { ...useBlockProps() }>
	{ __(
		'Wp Res Builder – TEST!',
		'wp-res-builder'
	) }
</p>
 */