import os
def replace_substring_in_files(folder_path, old_substring, new_substring):
    # Get a list of all files in the folder
    files = os.listdir(folder_path)

    for file_name in files:
        # Construct the full path of the file
        file_path = os.path.join(folder_path, file_name)

        # Check if it's a file (not a subfolder)
        if os.path.isfile(file_path) and file_name.count(old_substring) != 0 :
            # Rename the file by replacing the old substring with the new substring
            new_file_name = file_name.replace(old_substring, new_substring)
            new_file_path = os.path.join(folder_path, new_file_name)

            # Perform the rename operation
            os.rename(file_path, new_file_path)
            print(f'Renamed: {file_name} to {new_file_name}')

# Example usage
for i in range(18, 19):
    folder_path = f'D:/ProgramCache/CodeBlocks/MinGW/bin/ac.exe/pics/for/reddit/{i}'
    old_substring = '['
    old_substring2 = ']'
    new_substring = ''

    replace_substring_in_files(folder_path, old_substring, new_substring)
    replace_substring_in_files(folder_path, old_substring2, new_substring)

