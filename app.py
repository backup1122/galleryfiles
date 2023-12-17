import os

def minify_filenames(folder_path):
    # Get a list of all files in the folder
    files = os.listdir(folder_path)

    # Iterate through the files and minify their names
    for index, file_name in enumerate(files):
        # Construct the full path to the file
        old_path = os.path.join(folder_path, file_name)

        # Split the filename and extension
        file_name_without_extension, file_extension = os.path.splitext(file_name)

        # Generate a short and unique filename
        new_name = f"{index+1}"

        # Construct the full path to the new file with the original extension
        new_path = os.path.join(folder_path, f"{new_name}{file_extension}")

        # Rename the file
        os.rename(old_path, new_path)

if __name__ == "__main__":
    #"D:\\ProgramCache\\CodeBlocks\\MinGW\\bin\\ac.exe\\pics\\f\\r\\18", 
    arr=["D:\\ProgramCache\\CodeBlocks\\MinGW\\bin\\ac.exe\\pics\\f\\r\\34"]
    for i in arr:
        minify_filenames(i)
    
